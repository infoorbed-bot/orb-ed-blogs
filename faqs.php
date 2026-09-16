    <?php
    $pageTitle = "FAQs | O & A Level, IGCSE and MDCAT Online Classes | Orb-Ed";
    $pageDescription = "Answers about Orb-Ed's O Level, A Level, IGCSE and MDCAT online classes in Pakistan — subjects offered, demo classes, past papers, pricing and more.";

    $faqs = [
        [
            'q' => 'How many devices can I use on Orb-Ed?',
            'a' => 'Each Orb-Ed access is enabled on one device only.',
        ],
        [
            'q' => 'How can I register for multiple courses?',
            'a' => 'Students can register for multiple courses through our portal, and O Level and A Level courses can be combined on the same account.',
        ],
        [
            'q' => 'How does Orb-Ed help me connect with tutors?',
            'a' => 'Tutors for all subjects are available on a request basis. Each student can reach out to our support team to book a slot for their preferred day and time, and 24/7 tutor support is available for questions between sessions.',
        ],
        [
            'q' => 'I am not confident I will understand the teacher or the lecture material. How can Orb-Ed help?',
            'a' => 'Upon registering, all students are provided with a demo session to evaluate the teaching style and course outline. Once the student is comfortable, they proceed to pay for the course with their relevant teacher.',
        ],
        [
            'q' => 'Can I book a free O Level demo class or A Level trial class before enrolling?',
            'a' => 'Yes. A free O Level demo class or A Level trial class gives you a real recorded lecture, notes, and sample past paper questions before you commit to a full course.',
        ],
        [
            'q' => 'What O Level subjects does Orb-Ed offer online?',
            'a' => 'Economics, Accounting, Mathematics, Additional Mathematics, Biology, Physics, Chemistry, Business Studies, Computer Science, Islamiyat, Pakistan Studies, English, and Urdu — including Urdu IGCSE.',
        ],
        [
            'q' => 'Are O Level online classes in Pakistan as effective as a tuition centre?',
            'a' => 'For most students, yes — often more so, since recorded lectures can be rewatched as many times as needed, without the commute a Karachi, Lahore or Islamabad tuition centre would require.',
        ],
        [
            'q' => 'Does Orb-Ed provide O Level past paper solving?',
            'a' => 'Yes, every O Level subject includes solved and unsolved topical and yearly past papers alongside the recorded lectures and notes.',
        ],
        [
            'q' => 'What does an O Level recorded lecture include?',
            'a' => 'A structured, rewatchable video lecture covering one syllabus topic at a time, paired with notes and practice questions so you can test understanding immediately after watching.',
        ],
        [
            'q' => 'Does Orb-Ed offer A Level online classes, including AS and A2?',
            'a' => 'Yes, full AS and A2 Level online classes are available across Pakistan, structured the same way as O Level — recorded lectures, notes, and past paper practice for each subject.',
        ],
        [
            'q' => 'What A Level subjects are available?',
            'a' => 'Economics, Accounting, Mathematics, Biology, Physics, Chemistry, Psychology, Business, Law, English Language, Computer Science, Urdu, and Islamic Studies, across AS and A2.',
        ],
        [
            'q' => 'Are A Level topical past papers included?',
            'a' => 'Yes, every A Level subject pairs its recorded lectures with topical and yearly past papers, solved and explained.',
        ],
        [
            'q' => 'What is the difference between IGCSE and O Level?',
            'a' => 'They\'re both Cambridge International qualifications with heavily overlapping content — the practical difference is mostly in specific syllabus codes and which board your school is affiliated with, not difficulty. <a href="blogs/igcse-vs-o-level-difference">Read the full breakdown</a>.',
        ],
        [
            'q' => 'Does Orb-Ed teach IGCSE subjects like Urdu IGCSE?',
            'a' => 'Yes, Orb-Ed\'s course catalogue covers both IGCSE and O Level subject codes, including a dedicated Urdu IGCSE course alongside standard O Level Urdu.',
        ],
        [
            'q' => 'Does Orb-Ed offer MDCAT online preparation?',
            'a' => 'Yes, MDCAT online preparation for 2026 covers Biology, Chemistry, and Physics through recorded lectures structured around the actual MDCAT syllabus.',
        ],
        [
            'q' => 'Are MDCAT past papers with solutions available?',
            'a' => 'Yes, MDCAT past papers come solved and explained across Biology, Chemistry, and Physics, so you can see exactly where your reasoning went wrong on a missed question.',
        ],
        [
            'q' => 'Does Orb-Ed provide MDCAT MCQ practice?',
            'a' => 'Yes, MDCAT MCQ practice includes both untimed topical sets for accuracy and timed full-length sets for exam-day pacing, with explained solutions throughout.',
        ],
        [
            'q' => 'Is Orb-Ed available in my city?',
            'a' => 'Yes — Orb-Ed is fully online, so it works anywhere in Pakistan with an internet connection, including Karachi, Lahore, Islamabad, Rawalpindi, Faisalabad, Multan, Gujranwala, Sialkot, Peshawar, and Hyderabad.',
        ],
        [
            'q' => 'How do I enroll and pay for a course?',
            'a' => 'After a free demo session, you can enroll and pay for the course directly with your chosen tutor through our portal.',
        ],
        [
            'q' => 'Can I switch subjects or tutors after enrolling?',
            'a' => 'Yes, reach out to our support team and they\'ll help you adjust your enrollment to a different subject or tutor.',
        ],
    ];

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(static function (array $faq): array {
            return [
                '@type' => 'Question',
                'name' => $faq['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => strip_tags($faq['a']),
                ],
            ];
        }, $faqs),
    ];

    include('header.php');
    ?>
    <script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES); ?></script>
    <div class="aboutpage">


        <div class="smoke-section-parent">
            <div class="ag-smoke-block">
                <div>
                    <img class="ag-smoke-1" src="assets/images/sky.png" alt="Smoke">
                </div>
            </div>
        </div>


        <section class="sec-1 contactsection">
            <span class="baneer-line"><img src="assets/images/ban-line-1.png" alt=""></span>
            <div class="container-1500">
                <div class="row">
                    <div class="col-lg-5 col-md-6 represhing m-auto">

                        <div class="corse-tab">
                            <a href=""> FAQ'S </a>
                        </div>
                        <P class=" animate__animated animate__backInLeft">
                        </P>

                        <div class="row carrersform contactform">
                            <div class="accordion">
                                <?php foreach ($faqs as $faq): ?>
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <?php echo htmlspecialchars($faq['q']); ?>
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                        <?php echo $faq['a']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>




                            <div class="col-lg-12">
                                <div class="carrersform sbbtn">
                                    <a href="contact.php">Contact</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 col-md-6 animate__animated animate__zoomInLeft m-auto">
                        <div class="sec-1img" style="text-align: end;">
                            <img src="assets/images/bannerfaq.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>



    <?php include('footer.php'); ?>
