<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>WordPress Plugin Generator</title>
</head>

<body class="container">
    <h1>Create your WordPress plugin</h1>
    <form>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label for="pluginName" class="form-label">Plugin Name</label>
                <input type="text" class="form-control" id="pluginName" aria-describedby="pluginNameHelp" placeholder="My Plugin">
                <div id="pluginNameHelp" class="form-text">Please enter a name for your plugin. The name should be in a readable format such as "My Plugin"</div>
            </div>
            <div class="col-sm-6 mb-3">
                <label for="pluginSlug" class="form-label">Plugin Slug</label>
                <input type="text" class="form-control" id="pluginSlug" aria-describedby="pluginSlugHelp" placeholder="my-plugin">
                <div id="pluginSlugHelp" class="form-text">The slug is the technical definition of your plugin name: my-plugin</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mb-3">
                <label for="pluginUri" class="form-label">Plugin Uri</label>
                <input type="text" class="form-control" id="pluginUri" aria-describedby="pluginUriHelp" placeholder="https://mydomain.com">
                <div id="pluginUriHelp" class="form-text">Please include a link to your given plugin here.</div>
            </div>
            <div class="col-sm-4 mb-3">
                <label for="pluginVersion" class="form-label">Plugin Version</label>
                <input type="text" class="form-control" id="pluginVersion" aria-describedby="pluginVersionHelp" placeholder="1.0.0">
                <div id="pluginVersionHelp" class="form-text">The current version of your plugin such as 1.0.0</div>
            </div>
            <div class="col-sm-4 mb-3">
                <label for="pluginDescription" class="form-label">Plugin Description</label>
                <input type="text" class="form-control" id="pluginDescription" aria-describedby="pluginDescriptionHelp" placeholder="Enter a short description">
                <div id="pluginDescriptionHelp" class="form-text">Enter a short description of max 250 characters.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mb-3">
                <label for="authorName" class="form-label">Author Name</label>
                <input type="text" class="form-control" id="authorName" aria-describedby="authorNameHelp" placeholder="John Doe">
                <div id="authorNameHelp" class="form-text">The name of the author of the plugin: Jon Doe</div>
            </div>
            <div class="col-sm-4 mb-3">
                <label for="authorEmail" class="form-label">Author E-mail</label>
                <input type="text" class="form-control" id="authorEmail" aria-describedby="authorEmailHelp" placeholder="jdoe@demo.com">
                <div id="authorEmailHelp" class="form-text">The email of the author of the plugin: jon.doe@example.com</div>
            </div>
            <div class="col-sm-4 mb-3">
                <label for="authorUri" class="form-label">Author Uri</label>
                <input type="text" class="form-control" id="authorUri" aria-describedby="authorUriHelp" placeholder="https://jondoe.website">
                <div id="authorUriHelp" class="form-text">The URL of the authors website</div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>
</body>

</html>