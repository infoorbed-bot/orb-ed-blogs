// document.addEventListener("DOMContentLoaded", function () {
//     const goArrow = document.getElementById("goArrow");

//     goArrow.addEventListener("click", function () {
//         const level = document.getElementById("level").value;
//         const subject = document.getElementById("subject").value;

//         if (!level || !subject) {
//             alert("Please select both Level and Subject.");
//             return;
//         }

//         const levelMap = {
//             olevel: "O Level",
//             aslevel: "AS Level",
//             a2level: "A2 Level"
//         };

//         const subjectMap = {
//             business: "Business",
//             economics: "Economics",
//             accounts: "Accounts",
//             maths: "Mathematics",
//             english: "English",
//             biology: "Biology",
//             chemistry: "Chemistry",
//             physics: "Physics",
//             urdu: "Urdu",
//             pakistanstudies: "Pakistan Studies",
//             computerscience: "Computer Science",
//             environmentalmanagement: "Environmental Management",
//             addmaths: "Add Maths",
//             islamiyat: "Islamiyat",
//             sociology: "Sociology",
//             psychology: "Psychology",
//             furthermathematics: "Further Mathematics",
//             law: "Law",
//             it: "IT"
//         };

//         const readableLevel = levelMap[level.toLowerCase()];
//         const readableSubject = subjectMap[subject.toLowerCase()];

//         if (!readableLevel || !readableSubject) {
//             alert("Invalid level or subject selected.");
//             return;
//         }

//         const title = `${readableLevel} - ${readableSubject}`;
//         const encodedTitle = encodeURIComponent(title);
//         const url = `https://lms.orb-ed.pk/search?title=${encodedTitle}`;
//         window.location.href = url;
//     });
// });


    document.addEventListener("DOMContentLoaded", function () {
  const goArrow = document.getElementById("goArrow");
  const levelSelect = document.getElementById("level");
  const subjectSelect = document.getElementById("subject");

  const subjectOptions = {
    olevel: [
      "Business Studies", "Economics", "Accounting", "Mathematics", "English Language",
      "Biology", "Chemistry", "Physics", "Urdu", "Pakistan Studies", "Computer Science",
      "Env Management", "AddMaths", "Islamiyat"
    ],
    as: [
      "Business", "Economics", "Accounting", "Mathematics", "English",
      "Biology", "Chemistry", "Physics", "Sociology", "Computer Science",
      "Psychology", "Further Mathematics", "Law", "IT"
    ],
    a2: [
      "Business", "Economics", "Accounts", "Mathematics", "Biology",
      "Chemistry", "Physics", "Urdu", "Sociology", "Computer Science",
      "Psychology", "Law"
    ]
  };

  levelSelect.addEventListener("change", function () {
    const selectedLevel = levelSelect.value;
    const subjects = subjectOptions[selectedLevel] || [];

    // Clear current options
    subjectSelect.innerHTML = '<option value="">Select Subject</option>';

    // Populate new options
    subjects.forEach(subject => {
      const option = document.createElement("option");
      option.value = subject.toLowerCase().replace(/\s+/g, '');
      option.textContent = subject;
      subjectSelect.appendChild(option);
    });
  });

  goArrow.addEventListener("click", function () {
    const level = levelSelect.value;
    const subjectValue = subjectSelect.value;

    if (!level || !subjectValue) {
      alert("Please select both Level and Subject.");
      return;
    }

    const levelMap = {
      olevel: "O Level",
      as: "AS Level",
      a2: "A2 Level"
    };

    // Use selected text from the subject dropdown
    const subjectText = subjectSelect.options[subjectSelect.selectedIndex].text;
    const title = `${levelMap[level]} - ${subjectText}`;
    const encodedTitle = encodeURIComponent(title);

    window.location.href = `https://lms.orb-ed.pk/search?title=${encodedTitle}`;
  });
});

