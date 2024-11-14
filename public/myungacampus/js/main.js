function getResults(examType, candidateNumber, completedYear) {
    $.ajax({
        url: 'get_results.php',
        data: {
            examType: examType,
            candidateNumber: candidateNumber,
            completedYear: completedYear
        },
        type: 'POST',
        dataType: 'html',
        beforeSend: function() {
            $('#results-container').html('<div class="message-results">Processing...</div>');
        },
        success: function(data, textStatus, xhr) {

            $('#results-container').html(data);
        },
        error: function(xhr, textStatus, errorThrown) {
            $('#results-container').html('<div class="message-results">Cannot process results!, Please try again</div>');
        }
    });
}

function registerKey() {
    $.ajax({
        url: 'registor_security_key.php',
        data: $('#get-key').serialize(),
        type: 'POST',
        dataType: 'html',
        beforeSend: function() {
            $('#status-area').html('<div class="message-results">Processing...</div>');
        },
        success: function(data, textStatus, xhr) {
            $('#status-area').html(data);
        },
        error: function(xhr, textStatus, errorThrown) {
            $('#status-area').html('<div class="message-results">Cannot process your request!, Please try again</div>');
        }
    });
}

function requestSecurityKey() {
    $.ajax({
        url: 'request_security_key.php',
        type: 'POST',
        dataType: 'html',
        beforeSend: function() {
            $('#request-key-container').html('<div class="message-results">Loading...</div>');
        },
        success: function(data, textStatus, xhr) {

            $('#request-key-container').html(data);
        },
        error: function(xhr, textStatus, errorThrown) {
            $('#request-key-container').html('<div class="message-results">Cannot load!, Please try again</div>');
            console.log(errorThrown);
        }
    });
}

function sendEmail(formData) {
    $.ajax({
        url: 'send_mail.php',
        data: formData,
        type: 'POST',
        dataType: 'json',
        beforeSend: function () {
            $('#msg').html('<div class="message-results">Sending...</div>');
        },
        success: function (data, textStatus, xhr) {

            $('#msg').html(data.msg);
//            console.log(data);
        },
        error: function (xhr, textStatus, errorThrown) {
            $('#msg').html('<div class="message-results">Cannot load!, Please try again</div>');
            console.log(errorThrown);
        }
    });
}

function loadCounter() {
    $.ajax({
        url: 'counter.php',
        type: 'POST',
        dataType: 'html',
        success: function (data, textStatus, xhr) {

            $('#analytics-data').html(data);
//            console.log(data);
        },
        error: function (xhr, textStatus, errorThrown) {
        }
    });
}

function setLang(lang) {
    $.ajax({
        data: {
            lang: lang
        },
        url: 'set_language.php',
        type: 'POST',
        async: false,
        success: function (data, textStatus, jqXHR) {
            location.reload();
        }

    });
}

function updateCounter() {
    $.ajax({
        url: 'update_counter.php',
        type: 'POST'
    });
}

