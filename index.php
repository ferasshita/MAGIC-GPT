<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="media/logo.png">
        <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no">
        <meta name="theme-color" content="#000000">

        <link rel="manifest" href="/manifest.json">

        <meta property="og:title" content="MAGE - GPT Web App Generator ✨">
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
        <link rel="stylesheet" href="media/style.css">
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="">
    <div class="overflow-hidden
            cursor-pointer flex-row
            space-x-3
            text-white bg-gradient-to-r from-pink-400 to-amber-400">
        <div class="
            mx-auto flex items-center justify-center divide-white p-3
            text-sm font-medium
            lg:container lg:divide-x lg:px-16 xl:px-20
          "><span class="item-center flex gap-2 px-3">
                  </span></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="container">

            <div class="mb-4 bg-slate-50 p-8 rounded-xl md:flex justify-between items-center">
                <div>
                    <div class="flex justify-flex-start items-center">
                        <a href=""><img src="media/logo.png" alt="Magic" class="w-20"></a>
                        <div class="text-xl md:text-2xl font-bold text-slate-800 ml-4">
                            <h1>MAGIC ✨ GPT Web App Generator</h1>
                            <p class="md:text-base text-sm leading-relaxed text-gray-500">Generate your full-stack web
                                app in PHP & CodeIgniter </p>
                            <a href="projects" class="flex items-center mt-2 space-x-1 text-gray-500 hover:text-gray-400">
                                <span class="text-sm font-normal">Learn more</span>
                                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 15 15"
                                     class="text-base" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.877075 7.49972C0.877075 3.84204 3.84222 0.876892 7.49991 0.876892C11.1576 0.876892 14.1227 3.84204 14.1227 7.49972C14.1227 11.1574 11.1576 14.1226 7.49991 14.1226C3.84222 14.1226 0.877075 11.1574 0.877075 7.49972ZM7.49991 1.82689C4.36689 1.82689 1.82708 4.36671 1.82708 7.49972C1.82708 10.6327 4.36689 13.1726 7.49991 13.1726C10.6329 13.1726 13.1727 10.6327 13.1727 7.49972C13.1727 4.36671 10.6329 1.82689 7.49991 1.82689ZM8.24993 10.5C8.24993 10.9142 7.91414 11.25 7.49993 11.25C7.08571 11.25 6.74993 10.9142 6.74993 10.5C6.74993 10.0858 7.08571 9.75 7.49993 9.75C7.91414 9.75 8.24993 10.0858 8.24993 10.5ZM6.05003 6.25C6.05003 5.57211 6.63511 4.925 7.50003 4.925C8.36496 4.925 8.95003 5.57211 8.95003 6.25C8.95003 6.74118 8.68002 6.99212 8.21447 7.27494C8.16251 7.30651 8.10258 7.34131 8.03847 7.37854L8.03841 7.37858C7.85521 7.48497 7.63788 7.61119 7.47449 7.73849C7.23214 7.92732 6.95003 8.23198 6.95003 8.7C6.95004 9.00376 7.19628 9.25 7.50004 9.25C7.8024 9.25 8.04778 9.00601 8.05002 8.70417L8.05056 8.7033C8.05924 8.6896 8.08493 8.65735 8.15058 8.6062C8.25207 8.52712 8.36508 8.46163 8.51567 8.37436L8.51571 8.37433C8.59422 8.32883 8.68296 8.27741 8.78559 8.21506C9.32004 7.89038 10.05 7.35382 10.05 6.25C10.05 4.92789 8.93511 3.825 7.50003 3.825C6.06496 3.825 4.95003 4.92789 4.95003 6.25C4.95003 6.55376 5.19628 6.8 5.50003 6.8C5.80379 6.8 6.05003 6.55376 6.05003 6.25Z"
                                          fill="currentColor"></path>
                                </svg>
                            </a></div>
                    </div>
                </div>
                <div id="instraction" class="flex items-center hidden md:flex">
                  <span class="text-center inline-flex items-center rounded-lg shadow-md bg-gray-100 text-gray-700 py-2 pl-3 pr-4">
                    <span class="w-1.5 h-1.5 rounded-full mr-2 bg-current"></span>Waiting for instructions
                  </span>
                </div>
            </div>
            <form action="generate" id="postingToDB" method="post" class="bg-slate-50 p-8 rounded-xl">
                <div class="mb-6 flex flex-col gap-3">
                    <div>
                        <label for="appName" class="text-slate-700 block mb-2">App name <span class="text-red-500">*</span></label>
                        <input id="appName" name="appName" required="" type="text" placeholder="e.g. TodoApp or MyPlants">
                    </div>
                    <div>
                        <label for="appAuthor" class="text-slate-700 block mb-2">Author name <span class="text-red-500">*</span></label>
                        <input id="appAuthor" name="appAuthor" required="" type="text" placeholder="Your name.">
                    </div>
                    <div>
                        <label for="appDesc" class="text-slate-700 block mb-2">Description <span class="text-red-500">*</span></label>
                        <textarea id="appDesc" required="" name="appDescription" placeholder="Describe your web app in a couple of sentences!
Mention pages you want + what should be happening on them, what data should be stored in the database, etc (check out the examples below).
The simpler and more specific the app is, the better the generated app will be." rows="5" cols="50"></textarea>
                    </div>

<div class="grid md:grid-cols-3 gap-3">

                    <div>
                        <label for="appColor" class="text-slate-700 block mb-2">App brand color</label>
                        <select id="appColor" name="appColor">
                            <option>Blue</option>
                            <option>Red</option>
                            <option>Orange</option>
                            <option>Yellow</option>
                            <option>Green</option>
                            <option>Black</option>
                            <option>white</option>
                            <option>Grey</option>
                            <option>Brown</option>
                        </select>
                      </div>
                      <div>
                        <label for="appType" class="text-slate-700 block mb-2">App type</label>
                        <select id="appType" name="appType">
                            <option value="ai">Create with AI</option>
                            <option value="website">Basic CodeIgniter CMS</option>
                            <option value="project">Basic CodeIgniter skeleton</option>
                        </select>
                    </div>
</div>
                </div>
                <span class="loadingPosting"></span>
                <button type="submit" class="button mr-2">Generate the app
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="inline-block ml-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M176,112,74.34,213.66a8,8,0,0,1-11.31,0L42.34,193a8,8,0,0,1,0-11.31L144,80Z"
                              opacity="0.2"></path>
                        <path d="M248,152a8,8,0,0,1-8,8H224v16a8,8,0,0,1-16,0V160H192a8,8,0,0,1,0-16h16V128a8,8,0,0,1,16,0v16h16A8,8,0,0,1,248,152ZM56,72H72V88a8,8,0,0,0,16,0V72h16a8,8,0,0,0,0-16H88V40a8,8,0,0,0-16,0V56H56a8,8,0,0,0,0,16ZM184,192h-8v-8a8,8,0,0,0-16,0v8h-8a8,8,0,0,0,0,16h8v8a8,8,0,0,0,16,0v-8h8a8,8,0,0,0,0-16ZM219.31,80,80,219.31a16,16,0,0,1-22.62,0L36.68,198.63a16,16,0,0,1,0-22.63L176,36.69a16,16,0,0,1,22.63,0l20.68,20.68A16,16,0,0,1,219.31,80Zm-54.63,32L144,91.31l-96,96L68.68,208ZM208,68.69,187.31,48l-32,32L176,100.69Z"></path>
                    </svg>
                </button>
            </form>
            <div class="mt-8">
                <h3 class="text-xl font-semibold mb-4 text-slate-800">Some example ideas</h3>
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-3 lg:gap-4">
                    <div style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="bg-slate-50 p-8 rounded-xl mt-2 flex flex-col items-center cursor-pointer hover:shadow-lg transition-all">
                            <div class="idea w-full">
                                <div class="flex justify-between items-center mb-4"><h4
                                            class="text-xl font-semibold text-slate-700 mb-1"><span
                                                class="inline-block w-4 h-4 rounded-full mr-2"
                                                style="background-color: rgb(14, 165, 233);"></span>TodoApp</h4>
                                    <button onclick="idea_use('todo')" class="button sm gray">Use this idea</button>
                                </div>
<div id="todo" class="text-base leading-relaxed text-slate-500 line-clamp-[10]"><p>A simple todo
  app with one main page that lists all the tasks. User can create new tasks by
  providing their description, toggle existing ones, or edit their description.
  User owns tasks. User can only see and edit their own tasks. Tasks are saved in
  the database.</p></div>
</div>
                        </div>
                    </div>
                    <div style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="bg-slate-50 p-8 rounded-xl mt-2 flex flex-col items-center cursor-pointer hover:shadow-lg transition-all">
                            <div class="idea w-full">
                                <div class="flex justify-between items-center mb-4"><h4
                                            class="text-xl font-semibold text-slate-700 mb-1"><span
                                                class="inline-block w-4 h-4 rounded-full mr-2"
                                                style="background-color: rgb(34, 197, 94);"></span>MyPlants</h4>
                                    <button onclick="idea_use('MyPlants')" class="button sm gray">Use this idea</button>
                                </div>
<div id="MyPlants" class="text-base leading-relaxed text-slate-500 line-clamp-[10]"><p>An app where
  user can track their plants and their watering schedule.</p>
<p>Home page lists all of the user's plants. For each plant, number of days left
  until it needs to be watered is shown, as well as the plant's name, and a
  'Water' button. Home page also has a 'Add plant' button, that takes you to a new
  page where user can create a new plant.</p>
<p>When creating a new plant, user should give it a name and specify how often it
  needs to be watered (in the number of days). Plants are saved in the database.
  User can access only their own plants.</p></div>
</div>
                        </div>
                    </div>
                    <div style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="bg-slate-50 p-8 rounded-xl mt-2 flex flex-col items-center cursor-pointer hover:shadow-lg transition-all">
                            <div class="idea w-full">
                                <div class="flex justify-between items-center mb-4"><h4
                                            class="text-xl font-semibold text-slate-700 mb-1"><span
                                                class="inline-block w-4 h-4 rounded-full mr-2"
                                                style="background-color: rgb(245, 158, 11);"></span>Blog</h4>
                                    <button onclick="idea_use('blog')" class="button sm gray">Use this idea</button>
                                </div>
                                <div id='blog' class="text-base leading-relaxed text-slate-500 line-clamp-[10]"><p>A blogging
platform with posts and post comments.</p>
<p>User owns posts and comments and they are saved in the database.</p>
<p>Everybody can see all posts, but only the owner can edit or delete them.
Everybody can see all the comments.</p>
<p>App has four pages:</p>
<p>1. "Home" page lists all posts (their titles and authors) and is accessible by
anybody.</p>
<p> If you click on a post, you are taken to the "View post" page.</p>
<p> It also has a 'New post' button, that only logged in users can see, and that
takes you to the "New post" page.</p>
<p>2. "New post" page is accessible only by the logged in users. It has a form for
creating a new post (title, content).</p>
<p>3. "Edit post" page is accessible only by the post owner. It has a form for
editing the post with the id specified in the url.</p>
<p>4. "View post" page is accessible by anybody and it shows the details of the post
with the id specified in the url: its title, author, content and comments.</p>
<p> It also has a form for creating a new comment, that is accessible only by the
logged in users.</p>
<p></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mt-8"><p class="text-center text-slate-800">This is an experiment by <a
                        href="" target="_blank" rel="noopener noreferrer"
                        class="text-sky-500 hover:text-sky-600">Feras Shita</a></p>
            <p class="text-center text-slate-500 text-sm mt-2">This whole app is open-source, you can find the code <a
                        href="https://github.com/ferasshita" target="_blank"
                        rel="noopener noreferrer" class="text-sky-500 hover:text-sky-600">here</a>.</p></footer>
    </div>
</div>

<script>
    $(document).ready(function(){
        var i = 1;
        $("#postingToDB").on('submit',function(e){
            var plus = i++;
            $("#getingNP").prepend("<div id='FetchingNewPostsDiv"+plus+"' style='display:none;'></div>");
            e.preventDefault();
            $(this).ajaxSubmit({
                beforeSend:function(){
                    $('.loadingPosting').show();
                    $(".loadingPosting").html('<p class="loadingPostingP">0</p>');
                    $(".loadingPostingP").css({'width' : '0%'});
                },
                uploadProgress:function(event,position,total,percentCompelete){
                    $(".loadingPostingP").css({'width' : percentCompelete + '%'});
                    $(".loadingPostingP").html(percentCompelete);
                },
                success:function(data){
                    $('.empty').val('');
                    $("#refresh").load(location.href + " #refresh");
                    $("#instraction").html("<span class=\"text-center inline-flex items-center rounded-lg shadow-md bg-yellow-100 text-orange-700 py-2 pl-3 pr-4\"><span class=\"w-1.5 h-1.5 rounded-full mr-2 bg-current\"></span>Processing instructions</span>");
                    $(".loadingPosting").fadeOut(2000);
                    $('.loadingPosting').html("<p class='alertGreen'>Wait..</p>");
                    setTimeout(' window.location.href = "frontGenerate?pid='+data+'";',2000);
                }
            });

        });
    });
</script>
<script>
function idea_use(id){
  var text = $('#'+id).text();
  $('#appDesc').val(text);
}
</script>

<script src="https://buttons.github.io/buttons.js" async=""></script>
</body>
</html>
