-- ============================================================
-- Batch 3: 20 draft blog posts from the shared content list.
-- All status = 'draft', no published_at set (none was specified).
-- Paste into phpMyAdmin's SQL tab for orbed_blogs. Safe to re-run.
-- ============================================================

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Your Hardest Subject Isn''t Actually the Hardest — Here''s Why It Feels That Way' AS title,
  'your-hardest-subject-isnt-actually-the-hardest' AS slug,
  'The subject you dread most is rarely the objectively hardest one — usually it''s the one with the biggest unaddressed gap.' AS excerpt,
  '<p>Ask almost any O or A Level student which subject is their hardest, and they''ll answer instantly, with total confidence. But "hardest" and "most avoided" are usually the same thing wearing different labels — the subject that feels impossible is often just the one with the oldest unaddressed gap in it.</p>
<h2>How a Gap Becomes a "Hard Subject"</h2>
<p>A missed topic early on doesn''t stay contained. In Maths, a shaky grip on algebra quietly undermines trigonometry months later. In Chemistry, weak mole concept calculations resurface in every stoichiometry question that follows. By the time the subject "feels hard," it''s really just one old gap wearing a much bigger costume.</p>
<h2>Testing the Theory</h2>
<p>A useful exercise: pick your hardest subject and try to name the exact topic where it first started feeling difficult. Most students can point to a specific moment — a lesson they were absent for, a concept that was rushed, a homework they never finished. That''s usually the real problem, not the subject as a whole.</p>
<p>Recorded lectures are particularly good for this kind of repair work, since you can go straight back to the exact topic that broke first, rather than re-covering an entire subject from scratch. <a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and see how a targeted topic review works.</p>' AS content,
  'Your Hardest Subject Isn''t Actually the Hardest | Orb-Ed' AS meta_title,
  'Why the subject you call your ''hardest'' is often just the one you''ve avoided the longest, and how to fix that.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'your-hardest-subject-isnt-actually-the-hardest');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'The "I''ll Start on Monday" Problem: Why Students Keep Resetting Instead of Starting' AS title,
  'ill-start-on-monday-problem' AS slug,
  'Why ''starting fresh on Monday'' rarely happens, and how to break the cycle of resetting your study plan every week.' AS excerpt,
  '<p>There''s a familiar pattern: today doesn''t feel like the right day to start revising, so it gets pushed to Monday. Monday arrives, and something about it doesn''t feel right either. The pattern isn''t really about Mondays — it''s about waiting for motivation to show up before starting, when motivation almost always shows up after starting.</p>
<h2>Why "The Right Moment" Never Arrives</h2>
<p>Waiting to feel ready assumes readiness is a feeling that appears on its own. In practice, the feeling of being "in it" almost always follows the first ten minutes of actually doing the work, not the other way around. Treating Monday as a magic reset point just delays that first ten minutes indefinitely.</p>
<h2>A Smaller, More Honest Starting Point</h2>
<p>Instead of planning a perfect study day, try committing to opening one recorded lecture today — not finishing it, not mastering the topic, just pressing play. Most of the resistance lives in the decision to start, not in the studying itself once it''s underway.</p>
<p>Recorded lectures make this easier because there''s no pressure to "catch a class in progress" — you can start imperfectly, pause, and come back. <a href="https://lms.orb-ed.pk/account/register">Try a free demo lecture</a> today instead of waiting for Monday.</p>' AS content,
  'The "I''ll Start on Monday" Problem | Orb-Ed' AS meta_title,
  'Why waiting for the ''right'' moment to start studying almost never works, and what to do instead.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'ill-start-on-monday-problem');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'The 10-Minute Rule: How to Start Studying When Your Brain Keeps Saying "Later"' AS title,
  'the-10-minute-rule-start-studying' AS slug,
  'A simple, low-pressure technique for beating the urge to delay studying until you "feel like it."' AS excerpt,
  '<p>The 10-minute rule is simple: commit to studying for just ten minutes, with full permission to stop after that if you still want to. It sounds almost too easy to work — and yet it consistently does, for a reason rooted in how procrastination actually functions.</p>
<h2>Why It Works</h2>
<p>Procrastination isn''t usually about the task itself being hard — it''s about the size of the commitment feeling overwhelming before you''ve even started. "Study Chemistry for three hours" is intimidating. "Watch ten minutes of one lecture" isn''t. Once started, most people keep going well past the ten-minute mark, because the hardest part was never the studying — it was the starting.</p>
<h2>Making It Work With Recorded Lectures</h2>
<p>Recorded lectures suit the 10-minute rule particularly well, since a lecture can be paused at any point without losing your place, and topics are broken into segments short enough to fit a genuine ten-minute attempt.</p>
<p>Next time starting feels impossible, don''t commit to a full session — commit to ten minutes. <a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and test the rule on a real lecture.</p>' AS content,
  'The 10-Minute Rule for Studying | Orb-Ed' AS meta_title,
  'A simple technique for getting started on studying when motivation is nowhere to be found.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'the-10-minute-rule-start-studying');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Why Checking the Mark Scheme Too Early Can Make You Worse at Past Papers' AS title,
  'checking-mark-scheme-too-early-past-papers' AS slug,
  'Peeking at the mark scheme before finishing a question feels helpful, but it undermines the point of past paper practice.' AS excerpt,
  '<p>It''s tempting to glance at the mark scheme the moment a question gets tricky — just to check you''re "on the right track." The problem is that this quietly defeats the entire purpose of past paper practice, which is to find out what you can do without help, not with it.</p>
<h2>What Early Checking Actually Costs You</h2>
<p>Struggling with a question and pushing through it is exactly the process that builds exam-day resilience. Checking early replaces that struggle with recognition — you start following a model answer''s logic rather than generating your own, which feels productive but tests a completely different skill than the real exam will.</p>
<h2>A Better Way to Use the Mark Scheme</h2>
<p>Finish the full question, or genuinely get stuck for several minutes, before looking. Then compare your full attempt against the scheme, not just the parts that felt uncertain. That comparison is where real learning happens — not in the peek, but in the honest review afterward.</p>
<p>Orb-Ed''s solved past papers are structured for exactly this kind of review, with full explained answers rather than bare mark schemes. <a href="https://lms.orb-ed.pk/account/register">Register with Orb-Ed</a> to try a structured past paper session.</p>' AS content,
  'Checking the Mark Scheme Too Early | Orb-Ed' AS meta_title,
  'Why glancing at the mark scheme before finishing a question quietly weakens your past paper practice.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'checking-mark-scheme-too-early-past-papers');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Watching Lectures at 2x Speed: Smart Shortcut or False Productivity?' AS title,
  'watching-lectures-at-2x-speed' AS slug,
  'Speeding up lecture playback can genuinely save time — or just create the feeling of progress without the substance.' AS excerpt,
  '<p>Playing recorded lectures at 1.5x or 2x speed has become a default habit for a lot of students, mostly because it feels efficient. Sometimes it genuinely is. Other times, it''s a way of covering more content while actually absorbing less of it — and the difference matters more than most students realise.</p>
<h2>When Speeding Up Makes Sense</h2>
<p>For a topic you already understand reasonably well and just need to refresh, higher speed playback is a legitimate way to move faster without losing much. Your brain fills in gaps easily when the underlying concept is already familiar.</p>
<h2>When It Backfires</h2>
<p>For a genuinely new or difficult topic, speeding up trades depth for pace — you finish the lecture faster, but retain less of it, and often end up rewatching it anyway at normal speed once a past paper question exposes the gap. That second watch usually erases whatever time was "saved."</p>
<p>A reasonable rule: full speed for new or hard topics, faster playback only for revision passes. <a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and try both approaches on a real lecture.</p>' AS content,
  'Watching Lectures at 2x Speed | Orb-Ed' AS meta_title,
  'When speeding up recorded lectures genuinely saves time, and when it quietly costs you understanding.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'watching-lectures-at-2x-speed');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Online Learning Gives You Freedom. What Are You Actually Doing With It?' AS title,
  'online-learning-freedom-what-are-you-doing-with-it' AS slug,
  'Flexible, on-demand study time is only valuable if it actually gets used — a look at making the most of it.' AS excerpt,
  '<p>Online learning''s biggest selling point is freedom — study whenever, wherever, at your own pace. It''s also, quietly, its biggest risk. Freedom without structure doesn''t automatically turn into progress; it just as easily turns into "I''ll get to it eventually."</p>
<h2>The Difference Between Flexible and Formless</h2>
<p>Flexible means you choose when to study. Formless means there''s no study happening at all, just the ongoing intention to start later. The students who benefit most from online classes are the ones who convert flexibility into a loose personal schedule — not a rigid one, but a real one, even if it shifts week to week.</p>
<h2>A Simple Way to Use the Freedom Well</h2>
<p>Instead of "I''ll study when I have time," try "I''ll watch one lecture before dinner most days." It''s specific enough to actually happen, flexible enough to survive a busy day, and turns the freedom online learning offers into something that compounds over a term rather than evaporating.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and build a routine around it from day one.</p>' AS content,
  'Online Learning Freedom: What Are You Doing With It? | Orb-Ed' AS meta_title,
  'Flexibility is only useful if it''s actually used well — a look at how to turn online learning freedom into real progress.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'online-learning-freedom-what-are-you-doing-with-it');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'The Subject You Loved at O Levels Might Feel Completely Different at A Levels' AS title,
  'subject-you-loved-at-o-levels-feels-different-at-a-levels' AS slug,
  'Loving a subject at O Level doesn''t guarantee the same feeling at A Level — here''s why, and what to do about it.' AS excerpt,
  '<p>A student who loved O Level Biology because it felt manageable and interesting can be genuinely thrown off when A Level Biology arrives demanding far more independent analysis and far less straightforward recall. The subject didn''t change identity — but what it asks of you did.</p>
<h2>Why the Shift Catches Students Off Guard</h2>
<p>O Level rewards understanding and recalling content well. A Level increasingly rewards applying that content to unfamiliar situations, evaluating evidence, and making judgment calls — skills that were barely tested before. A student who was strong at the first skill set can genuinely struggle with the second, even in a subject they know well.</p>
<h2>Adjusting Without Losing Confidence</h2>
<p>The fix isn''t loving the subject less — it''s recognising that A Level success requires a different kind of practice, focused specifically on application and evaluation, not just content review. Past paper practice targeted at these higher-order skills closes that gap faster than simply re-reading notes.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free A Level trial class</a> to see how the exam skills differ from O Level.</p>' AS content,
  'Why a Subject Feels Different at A Levels | Orb-Ed' AS meta_title,
  'Why a subject you enjoyed at O Level can feel unrecognisable at A Level, and how to adjust.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'subject-you-loved-at-o-levels-feels-different-at-a-levels');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'The Mid-Year Reality Check Every O and A Level Student Needs' AS title,
  'mid-year-reality-check-o-a-level-students' AS slug,
  'A practical mid-year check-in for O and A Level students to see if the current study plan is actually working.' AS excerpt,
  '<p>Somewhere around the middle of the academic year, it''s worth pausing and asking an uncomfortable but useful question: is the current study approach actually working, or has it just become a familiar routine that feels productive without being tested against results?</p>
<h2>What to Actually Check</h2>
<p>Compare recent past paper scores against where they were a few months ago. Flat or declining scores despite consistent "studying" usually mean the method needs to change, not the effort level. More hours doing the same ineffective thing rarely fixes it.</p>
<h2>Making an Honest Adjustment</h2>
<p>A mid-year check isn''t about panicking — it''s about course-correcting while there''s still runway left before finals. If a subject''s scores are stuck, that''s the signal to change the approach for that specific subject: more topical past paper practice, revisiting foundational lectures, or asking for help on a specific recurring mistake.</p>
<p><a href="contact.php">Get in touch</a> or <a href="https://lms.orb-ed.pk/account/register">book a free demo class</a> if a mid-year check reveals a subject that needs a different approach.</p>' AS content,
  'The Mid-Year Reality Check | Orb-Ed' AS meta_title,
  'A practical mid-year check-in to see whether your current study approach is actually working.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'mid-year-reality-check-o-a-level-students');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Do You Need a Retake, or Do You Just Hate the Grade You Got?' AS title,
  'do-you-need-a-retake-or-hate-the-grade' AS slug,
  'A disappointing grade and a grade that genuinely needs retaking are not always the same thing — how to tell the difference.' AS excerpt,
  '<p>A grade that stings isn''t automatically a grade that needs retaking. Disappointment is an emotional reaction; the decision to retake should be a practical one, based on what the grade actually needs to be for your specific next step — a university requirement, a subject prerequisite, a personal minimum you''ve genuinely thought through.</p>
<h2>Questions Worth Asking First</h2>
<p>Does this specific grade block something concrete, like a required subject grade for a university offer? Or does it just feel lower than expected without actually closing any doors? The first is a real reason to retake. The second is worth sitting with before committing months of preparation to it.</p>
<h2>If a Retake Is the Right Call</h2>
<p>Once it''s clearly necessary, treat it differently from the first attempt — targeted past paper analysis on exactly where marks were lost, rather than a general re-study of the whole syllabus, tends to produce a meaningfully better result in less time.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> for targeted retake preparation focused on your specific gaps.</p>' AS content,
  'Do You Need a Retake? | Orb-Ed' AS meta_title,
  'How to honestly decide whether a retake is actually necessary, or whether disappointment is driving the decision.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'do-you-need-a-retake-or-hate-the-grade');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Why Cramming Feels Productive but Isn''t (The Science of Passive vs. Active Recall)' AS title,
  'cramming-feels-productive-but-isnt' AS slug,
  'Cramming feels effective while it''s happening — the science of active vs. passive recall explains why that feeling is misleading.' AS excerpt,
  '<p>Re-reading a chapter the night before an exam feels like real work — the content looks familiar, understanding feels solid, confidence goes up. That feeling is largely an illusion created by recognition, not genuine recall, and it tends to evaporate the moment an exam question asks for the information without the prompt of the original text in front of you.</p>
<h2>Passive vs. Active Recall</h2>
<p>Re-reading is passive — the information washes over you without requiring retrieval. Active recall means closing the notes and trying to reproduce the answer from memory, which is measurably harder in the moment but builds retention that re-reading simply doesn''t.</p>
<h2>A More Honest Way to Revise</h2>
<p>Instead of a final re-read the night before, try closing the notes and attempting a past paper question cold, then checking against a solved answer. It feels less comfortable than re-reading, which is exactly why it works better — the discomfort is the retrieval effort doing its job.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Register with Orb-Ed</a> for structured past paper practice built around active recall, not passive review.</p>' AS content,
  'Why Cramming Feels Productive but Isn''t | Orb-Ed' AS meta_title,
  'The difference between passive re-reading and active recall, and why cramming feels like it works when it usually doesn''t.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'cramming-feels-productive-but-isnt');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'The Psychology of Exam Anxiety — and How to Actually Calm It' AS title,
  'psychology-of-exam-anxiety' AS slug,
  'Understanding what exam anxiety actually is makes it easier to manage — a practical, non-generic look at calming it.' AS excerpt,
  '<p>Exam anxiety isn''t a character flaw or a sign of poor preparation — it''s a fairly predictable physiological response, and understanding what''s actually happening in the moment makes it noticeably easier to manage than simply being told to "calm down."</p>
<h2>What''s Actually Happening</h2>
<p>Under exam stress, the brain temporarily prioritises threat response over working memory, which is why a well-prepared student can still blank on a question they clearly know. It''s not that the knowledge disappeared — it''s temporarily harder to access under that physiological state.</p>
<h2>Practical Ways to Interrupt It</h2>
<p>Slow, deliberate breathing for even thirty seconds measurably shifts the body out of that heightened state. Starting with the easiest question first, rather than the first question on the page, also helps re-establish a sense of control before tackling harder material.</p>
<h2>The Best Long-Term Fix</h2>
<p>Genuine familiarity with a subject, built through consistent past paper practice under timed conditions, reduces exam anxiety more reliably than any single in-the-moment technique — because there''s simply less unfamiliar territory left to be anxious about.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and start building that familiarity well before exam season.</p>' AS content,
  'The Psychology of Exam Anxiety | Orb-Ed' AS meta_title,
  'What''s actually happening in your brain during exam anxiety, and practical ways to calm it before and during an exam.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'psychology-of-exam-anxiety');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'How to Build a Study Timetable That Actually Survives Week One' AS title,
  'build-study-timetable-survives-week-one' AS slug,
  'Most ambitious study timetables collapse by day three — a more honest approach to building one that actually lasts.' AS excerpt,
  '<p>Most study timetables are built in a burst of motivation, packed with more hours than any real week can hold, and abandoned within days once reality intervenes. The problem usually isn''t discipline — it''s that the timetable was never realistic to begin with.</p>
<h2>Why Ambitious Timetables Fail</h2>
<p>A schedule with zero slack assumes every day goes perfectly — no tiredness, no unexpected commitments, no off days. The first disruption breaks the whole system, and once it''s broken, most students abandon the timetable entirely rather than just adjusting it.</p>
<h2>Building One That Bends Instead of Breaks</h2>
<p>Start with fewer hours than feels ambitious, and build in at least one genuinely free evening a week as a buffer. A timetable that''s slightly under-scheduled and consistently followed beats an aggressive one abandoned by week two, every time.</p>
<p>Recorded lectures make this kind of flexible timetable realistic, since sessions can shift around a busy day without losing content. <a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and build a timetable around it.</p>' AS content,
  'A Study Timetable That Survives Week One | Orb-Ed' AS meta_title,
  'Most study timetables collapse within a week. Here''s how to build one that actually holds up.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'build-study-timetable-survives-week-one');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Comparing Yourself to Other Students Is Ruining Your Study Habits' AS title,
  'comparing-yourself-to-other-students' AS slug,
  'Constantly measuring your progress against classmates distorts study decisions more than it motivates them.' AS excerpt,
  '<p>Seeing a classmate finish a past paper faster, or claim to already understand a topic that''s still confusing, triggers a familiar reaction — panic, then a rushed attempt to catch up that skips the actual understanding in favour of just moving faster. Comparison rarely produces better studying; it mostly produces anxious studying.</p>
<h2>Why the Comparison Is Usually Misleading</h2>
<p>You''re seeing one visible moment of someone else''s process — a confident answer, a fast finish — without seeing the hours of confusion, mistakes, and re-study that got them there. Comparing your full, messy process to someone else''s highlight reel is comparing two completely different things.</p>
<h2>A More Useful Comparison</h2>
<p>Compare your own performance against your own past performance — last month''s past paper score against this month''s, not against a classmate''s. That comparison is actually meaningful, because it''s the same student, same starting point, measured honestly over time.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and focus on your own progress, tracked your own way.</p>' AS content,
  'Comparing Yourself to Other Students | Orb-Ed' AS meta_title,
  'How comparing your progress to classmates quietly distorts study decisions, and what to focus on instead.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'comparing-yourself-to-other-students');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'How to Deal With Exam Results That Didn''t Go Your Way' AS title,
  'how-to-deal-with-exam-results-that-didnt-go-your-way' AS slug,
  'A practical guide to processing a disappointing result without spiralling, and figuring out what actually comes next.' AS excerpt,
  '<p>A result that lands below expectations is genuinely hard, and skipping past that to "just move forward positively" rarely works. It''s worth actually sitting with the disappointment for a moment before making any decisions about what happens next — decisions made purely from panic tend to be worse ones.</p>
<h2>Separating the Emotional Reaction From the Practical Question</h2>
<p>Once the initial disappointment has settled, the practical question is narrower than it feels: does this result actually block something specific — a university offer, a subject requirement — or does it just feel worse than hoped without closing any real doors?</p>
<h2>Figuring Out What Actually Went Wrong</h2>
<p>Rather than a vague sense of "I need to try harder," look at the specific paper or topic where marks were lost. A results-day disappointment in one paper often traces back to one identifiable gap, not a wholesale failure across the subject — and that gap is fixable in a way "trying harder in general" isn''t.</p>
<p><a href="contact.php">Get in touch</a> to talk through next steps, or <a href="https://lms.orb-ed.pk/account/register">book a free demo class</a> for targeted support on the specific gap.</p>' AS content,
  'How to Deal With Disappointing Exam Results | Orb-Ed' AS meta_title,
  'A practical, non-generic guide to processing a disappointing exam result and deciding what to do next.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'how-to-deal-with-exam-results-that-didnt-go-your-way');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  '5 Reasons Students Are Switching to Online Tutoring for O/A Levels' AS title,
  '5-reasons-students-switching-online-tutoring' AS slug,
  'The five reasons that come up again and again when O and A Level students explain why they switched to online tutoring.' AS excerpt,
  '<p>The shift toward online tutoring for O and A Level students in Pakistan hasn''t happened for one single reason — it''s a combination of practical factors that, together, make traditional tuition centres feel increasingly like the harder option.</p>
<h2>1. No Commute</h2>
<p>Time lost travelling to and from a tuition centre is time that never goes back into studying. Online tutoring removes it entirely.</p>
<h2>2. Learning at Your Own Pace</h2>
<p>Recorded lectures can be rewatched as many times as needed — a live class simply can''t offer that for every student in the room.</p>
<h2>3. Full Subject Access</h2>
<p>Online platforms aren''t limited to whichever subjects a local centre happens to staff for, opening up options like Additional Mathematics or Computer Science regardless of local demand.</p>
<h2>4. Support Outside Fixed Hours</h2>
<p>24/7 tutor support means a question doesn''t have to wait for the next scheduled class.</p>
<h2>5. Consistent Quality</h2>
<p>The same recorded lecture and materials are available to every student, regardless of which batch or branch they''d otherwise have been assigned to.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and see which of these five reasons resonates most with your own situation.</p>' AS content,
  '5 Reasons Students Are Switching to Online Tutoring | Orb-Ed' AS meta_title,
  'The five most common reasons O and A Level students are moving from traditional tuition to online tutoring.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = '5-reasons-students-switching-online-tutoring');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Why E-Learning Works Better for Busy Students Than Traditional Tuition' AS title,
  'e-learning-works-better-for-busy-students' AS slug,
  'For students already stretched thin between school, extracurriculars, and family life, e-learning solves a scheduling problem traditional tuition never could.' AS excerpt,
  '<p>A student with a full school day, sports practice, and family commitments doesn''t have room left for a fixed tuition slot that ignores all of that. E-learning doesn''t just offer a nicer alternative for busy students — it solves a genuine scheduling conflict that traditional tuition structurally can''t.</p>
<h2>The Real Constraint Isn''t Motivation</h2>
<p>Busy students are often assumed to need more discipline, when the actual barrier is simpler: there just isn''t a free two-hour block that lines up with a tuition centre''s fixed schedule. E-learning removes that constraint by not requiring a fixed block at all.</p>
<h2>Fitting Study Into Fragments of Time</h2>
<p>Recorded lectures can be split across smaller pockets of time — twenty minutes here, thirty there — in a way a live class never could be attended partially. For a genuinely busy student, that flexibility is often the difference between studying consistently and not studying at all.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and see how e-learning fits around a packed schedule.</p>' AS content,
  'Why E-Learning Works Better for Busy Students | Orb-Ed' AS meta_title,
  'How e-learning specifically benefits students juggling extracurriculars, family commitments, or long school days.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'e-learning-works-better-for-busy-students');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Private School Fees vs. Online Prep: What You''re Actually Paying For' AS title,
  'private-school-fees-vs-online-prep' AS slug,
  'A practical, non-judgmental look at what private school and tuition fees actually buy, compared to online prep.' AS excerpt,
  '<p>Private schooling and tuition centre fees in Pakistan can add up to a genuinely large annual figure, and it''s worth asking plainly what that spend actually buys, compared to what online prep offers at a fraction of the cost.</p>
<h2>What School Fees Cover</h2>
<p>Facilities, a structured daily environment, peer interaction, and — for the academic side specifically — teaching quality that varies considerably from school to school and teacher to teacher, even within the same expensive institution.</p>
<h2>What Online Prep Specifically Adds</h2>
<p>Online prep isn''t a replacement for school itself, but for the tuition layer stacked on top of it — and there, the comparison is more direct: the same recorded lecture quality and past paper support regardless of cost, without the added expense of a specialised tutor or a second commute.</p>
<h2>A Practical Way to Decide</h2>
<p>Rather than treating it as an either-or choice, many families use online prep specifically to fill the gaps a school''s teaching doesn''t fully cover, at a cost far below hiring an additional private tutor for the same subject.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and compare the value directly for yourself.</p>' AS content,
  'Private School Fees vs. Online Prep | Orb-Ed' AS meta_title,
  'A practical breakdown of what private school and tuition fees actually buy versus what online prep offers.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'private-school-fees-vs-online-prep');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Why "Just Do Your Best" Is the Most Confusing Thing a Parent Can Say Before Finals' AS title,
  'just-do-your-best-confusing-parent-advice' AS slug,
  'Well-intentioned advice like "just do your best" often lands as pressure rather than comfort — here''s why, and what helps more.' AS excerpt,
  '<p>"Just do your best" is meant as reassurance, but for a lot of students right before finals, it lands as something closer to pressure — because "your best" is vague, unmeasurable, and quietly implies that anything less is a personal failing rather than a normal outcome of a hard exam.</p>
<h2>Why the Phrase Backfires</h2>
<p>Vague encouragement doesn''t give a student anything concrete to act on. Faced with genuine uncertainty about a subject, "just do your best" can feel like being told to solve the uncertainty through willpower alone, which isn''t actually how exam performance works.</p>
<h2>What Tends to Help More</h2>
<p>Specific, practical support lands better than general encouragement — asking which subject feels shakiest and helping arrange targeted revision for it, rather than a broad "you''ll be fine." Concrete help reduces anxiety in a way vague reassurance rarely does.</p>
<p><a href="contact.php">Get in touch</a> if you''re looking for concrete, subject-specific support to offer before finals rather than general encouragement.</p>' AS content,
  'Why "Just Do Your Best" Confuses Students | Orb-Ed' AS meta_title,
  'Well-meaning advice like "just do your best" often leaves students more anxious, not less — here''s a more useful alternative.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'just-do-your-best-confusing-parent-advice');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'The University Admissions Myth: Do Pakistani Universities Actually Care About A* Count?' AS title,
  'university-admissions-myth-a-star-count' AS slug,
  'A closer, more practical look at how much raw A* count actually matters for Pakistani university admissions.' AS excerpt,
  '<p>A common belief among O and A Level students is that admissions come down almost entirely to counting A*s — more is simply better, regardless of which subjects they''re in or how they fit together. The reality most universities apply is more specific than that.</p>
<h2>What Usually Matters More Than Raw Count</h2>
<p>Subject relevance to the intended degree, meeting specific minimum requirements for that programme, and a coherent subject combination tend to carry more weight than an extra A* in an unrelated subject. A strong, relevant set of grades often outperforms a longer list of scattered ones.</p>
<h2>Where the Myth Comes From</h2>
<p>More A*s rarely hurts an application, so the belief that "more is always better" isn''t entirely wrong — it''s just incomplete. It misses that relevance and meeting specific programme requirements usually matter more than the total count once a reasonable grade threshold is met.</p>
<h2>A More Useful Focus</h2>
<p>Rather than chasing A*s across every subject equally, it''s usually more effective to focus revision time on the subjects a target degree actually requires or values most.</p>
<p><a href="contact.php">Get in touch</a> if you''d like help thinking through which subjects matter most for your specific university plans.</p>' AS content,
  'Do Universities Care About A* Count? | Orb-Ed' AS meta_title,
  'A practical look at whether Pakistani university admissions genuinely weigh raw A* count as heavily as students assume.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'university-admissions-myth-a-star-count');

INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status)
SELECT * FROM (SELECT
  'Why Some Students Perform Better Under Pressure — and Why That''s Not an Excuse to Skip Prep' AS title,
  'students-perform-better-under-pressure-not-excuse-to-skip-prep' AS slug,
  'Some students genuinely perform better under time pressure — but that''s a reason to prepare differently, not a reason to prepare less.' AS excerpt,
  '<p>Some students genuinely do produce their best work close to a deadline, and it''s tempting to read that as proof that heavy preparation isn''t necessary for them. That reading skips an important detail: performing well under pressure and being unprepared are not actually the same thing.</p>
<h2>What "Good Under Pressure" Really Means</h2>
<p>Students who perform well under pressure are usually drawing on a solid base of prior preparation and simply accessing it efficiently under time constraints — not conjuring knowledge from nothing in the moment. The pressure sharpens focus; it doesn''t manufacture understanding that was never built.</p>
<h2>The Risk of Misreading This Pattern</h2>
<p>Assuming "I work well under pressure" as a licence to skip consistent preparation tends to work until the exam that finally exceeds what can be improvised — often a harder-than-expected paper with no prior foundation to draw on.</p>
<h2>Using the Trait Productively</h2>
<p>If timed conditions genuinely bring out your best work, use that specifically during past paper practice — timed sessions rather than untimed ones — rather than as a reason to under-prepare beforehand.</p>
<p><a href="https://lms.orb-ed.pk/account/register">Book a free demo class</a> and build the foundation that makes pressure work in your favour, not against it.</p>' AS content,
  'Performing Better Under Pressure | Orb-Ed' AS meta_title,
  'Some students genuinely do better under pressure — but that''s not a reason to skip preparation. Here''s the real relationship between the two.' AS meta_description,
  'General' AS category,
  'draft' AS status
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM posts WHERE slug = 'students-perform-better-under-pressure-not-excuse-to-skip-prep');

