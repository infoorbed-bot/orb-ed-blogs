<?php
// "Remember me" persistent login — a selector/validator token pair stored
// hashed in the DB, set as a long-lived cookie. Rotated on every use so a
// leaked old cookie value stops working once the real device uses it again.

function remember_create(PDO $pdo, int $adminId): void
{
    $selector = bin2hex(random_bytes(9));
    $validator = bin2hex(random_bytes(32));
    $validatorHash = hash('sha256', $validator);
    $ttl = 60 * 60 * 24 * 400; // ~400 days, the practical browser cookie cap

    $stmt = $pdo->prepare(
        'INSERT INTO remember_tokens (admin_id, selector, validator_hash, expires_at) VALUES (?, ?, ?, ?)'
    );
    $stmt->execute([$adminId, $selector, $validatorHash, date('Y-m-d H:i:s', time() + $ttl)]);

    setcookie('remember_me', $selector . ':' . $validator, [
        'expires' => time() + $ttl,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
}

function remember_consume(PDO $pdo): ?array
{
    if (empty($_COOKIE['remember_me'])) {
        return null;
    }

    [$selector, $validator] = array_pad(explode(':', $_COOKIE['remember_me'], 2), 2, '');
    if ($selector === '' || $validator === '') {
        return null;
    }

    $stmt = $pdo->prepare('SELECT * FROM remember_tokens WHERE selector = ? AND expires_at > NOW()');
    $stmt->execute([$selector]);
    $token = $stmt->fetch();

    if (!$token || !hash_equals($token['validator_hash'], hash('sha256', $validator))) {
        remember_forget($pdo);
        return null;
    }

    $pdo->prepare('DELETE FROM remember_tokens WHERE id = ?')->execute([$token['id']]);
    remember_create($pdo, (int) $token['admin_id']);

    return ['admin_id' => (int) $token['admin_id']];
}

function remember_forget(PDO $pdo): void
{
    if (!empty($_COOKIE['remember_me'])) {
        [$selector] = explode(':', $_COOKIE['remember_me'], 2);
        if ($selector) {
            $pdo->prepare('DELETE FROM remember_tokens WHERE selector = ?')->execute([$selector]);
        }
    }

    setcookie('remember_me', '', [
        'expires' => time() - 3600,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
}
