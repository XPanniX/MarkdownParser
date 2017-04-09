var previewTab = $('#nav-preview');
var textInput = $('#text-input');
var textPreview = $('#text-preview');

console.log(previewTab);
previewTab.click(function(event) {
    var text = textInput.val();

    $.ajax({
        url: "parse.php",
        method: "POST",
        data: { text: text }
    }).done(function(response) {
        console.log(response);
        textPreview.html(response);
    });
});
