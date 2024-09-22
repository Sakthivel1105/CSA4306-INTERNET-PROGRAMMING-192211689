// Validate login forms
function validateLoginForm(event, userType) {
    event.preventDefault();
    var username = document.getElementById(userType + '-username').value;
    var password = document.getElementById(userType + '-password').value;

    if (username === '' || password === '') {
        alert('All fields are required.');
        return false;
    }

    document.getElementById(userType + '-login-form').submit();
}

// Validate exam scheduling form
function validateExamForm(event) {
    event.preventDefault();
    var examDate = document.getElementById('exam-date').value;

    if (examDate === '') {
        alert('Please select an exam date.');
        return false;
    }

    document.getElementById('exam-form').submit();
}

// Validate question form
function validateQuestionForm(event) {
    event.preventDefault();
    var question = document.getElementById('question').value.trim();

    if (question === '') {
        alert('Please enter a question.');
        return false;
    }

    document.getElementById('question-form').submit();
}

// Confirm result publication
function confirmPublishResults() {
    if (confirm('Are you sure you want to publish the results? This cannot be undone.')) {
        document.getElementById('publish-results-form').submit();
    }
}
