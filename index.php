<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markdown Parser</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

<div id="parser-wrapper">
    <!-- Nav tabs -->
    <div id="parser" class="card">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#write" aria-controls="write" role="tab" data-toggle="tab" id="nav-write">Write</a>
            </li>
            <li role="presentation">
                <a href="#preview" aria-controls="preview" role="tab" data-toggle="tab"
                   id="nav-preview">Preview</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="write">
                <textarea id="text-input" rows="10"></textarea>
            </div>
            <div role="tabpanel" class="tab-pane" id="preview">
                <div id="text-preview">
                    <!-- Text Preview goes here -->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>
