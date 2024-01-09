<?php
include('config/connect.php');


$query = mysqli_query($conn, "SELECT * FROM websites");

if (!$query) {
    die("MySQL Error: " . mysqli_error($conn));
}


// Close the database connection if needed
   ?>
<!DOCTYPE html>
<body>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="media/logo.png">
    <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">

    <link rel="manifest" href="/manifest.json">

    <meta property="og:title" content="MAGIC - GPT Web App Generator ✨">
    <meta property="og:description"
          content="Generate your full-stack web app in PHP & CodeIgniter using the magic of GPT.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://usemage.ai/twitter.png">
    <meta name="twitter:image" content="https://usemage.ai/twitter.png">
    <meta name="twitter:image:width" content="800">
    <meta name="twitter:image:height" content="400">
    <meta name="twitter:card" content="summary_large_image">

    <script src="js_back/jquery.min.js"></script>
    <script src="js_back/jquery.form.min.js"></script>
    <script src="js_back/bootstrap.min.js"></script>
    <script src="js_back/code.js"></script>
    <script type="text/javascript" src="js_back/jquery.maxlength.js"></script>


    <title>MAGIC - GPT Web App Generator ✨</title>
    <script type="module" crossorigin="" src="media/front.js"></script>
    <script src="media/code.js"></script>
    <link rel="stylesheet" href="media/style.css">

<style>
.file-list,
.file-list ul {
  list-style-type: none;
  font-size: 1em;
  line-height: 1.8em;
  margin-left: 20px;
  padding-left: 18px;
  border-left: 1px dotted #aaa;
}
.file-list li {
  position: relative;
  padding-left: 25px;
}

.file-list li span {
  text-decoration: none;
  cursor: pointer;
}

.file-list li span:before {
  display: block;
  content: ' ';
  width: 10px;
  height: 1px;
  position: absolute;
  border-bottom: 1px dotted #aaa;
  top: 0.6em;
  left: -14px;
}
.file-list li:before {
  list-style-type: none;
  font-family: FontAwesome;
  display: block;
  content: url('../icons/file.svg');
  position: absolute;
  top: 0;
  left: 0;
  width: 20px;
  height: 20px;
  font-size: 1.3em;
  color: #555;
}
.file-list .folder-root {
  list-style-type: none;
}

.file-list .folder-root:before {
  content: url('./icons/folder_close.svg');
}
.file-list .folder-root.open:before {
  content: url('./icons/folder_open.svg');
}
li.folder-root ul {
  transition: all 0.2s ease-in-out;
  overflow: hidden;
}
li.folder-root.closed > ul {
  opacity: 0;
  max-height: 0;
}
li.folder-root.open > ul {
  opacity: 1;
  display: block;
  max-height: 1000px;
}
@media (max-width: 768px) {
    .grid {
        display: block;
    }
}
@media screen and (max-width: 1024px) and (min-width: 768px) {
  .file-list,
  .file-list ul {
    margin-left: 3px;
    padding-left: 13px;
  }
}
</style>
</head>
<body>

<noscript>You need to enable JavaScript to run this app.</noscript>
<div><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="container">
          <div class="mt-8">
              <h3 class="text-xl font-semibold mb-4 text-slate-800">Some example ideas</h3>
              <div class="grid grid-cols-1 gap-2 lg:grid-cols-3 lg:gap-4">
              <?php
                      while ($row = mysqli_fetch_array($query)) {
                        $id = $row['id'];
                          $appName = $row['appName'];
                          $appDescription = $row['appDescription'];
                          $appAuthor = $row['appAuthor']; // Assuming 'appAuthor' is a valid column name
                          $appColor = $row['appColor'];
                          $zip = $row['zip'];
                          $logs = $row['logs'];
                          $folder = $row['folder'];
                          ?>

                                  <div style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                      <div class="bg-slate-50 p-8 rounded-xl mt-2 flex flex-col items-center cursor-pointer hover:shadow-lg transition-all">
                                          <div class="idea w-full">
                                              <div class="flex justify-between items-center mb-4"><h4
                                                          class="text-xl font-semibold text-slate-700 mb-1"><span
                                                              class="inline-block w-4 h-4 rounded-full mr-2"
                                                              style="background-color: rgb(14, 165, 233);"></span><?php echo $appName; ?></h4>
                                                  <a href="frontGenerate?pid=<?php echo $id; ?>"><button class="button sm gray">Use this idea</button></a>
                                              </div>
              <div class="text-base leading-relaxed text-slate-500 line-clamp-[10]"><p>
                <?php echo $appDescription; ?></p></div>
              </div>
                                      </div>
                                  </div>

                                               <?php  }
                      ?>
            </div>
          </div>
          </div>

</div><footer class="mt-8"><p class="text-center text-slate-800">This is an experiment by <a href="" target="_blank" rel="noopener noreferrer" class="text-sky-500 hover:text-sky-600">Feras Shita</a></p><p class="text-center text-slate-500 text-sm mt-2">This whole app is open-source, you can find the code <a href="" target="_blank" rel="noopener noreferrer" class="text-sky-500 hover:text-sky-600">here</a>.</p></footer></div></div>

</body>
</html>
