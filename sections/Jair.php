<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <section class="container mx-auto py-12 px-4 lg:px-0">
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-1/2 lg:mr-8 relative mb-8">
                <h1 class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-black custom-font font-bold">
                    &lt;&gt;<span class="custom-text">PRO</span>JECTEN&lt;<span class="font-black">&sol;</span>&gt;
                </h1>
                <p class="text-lg text-gray-700 leading-relaxed mb-8">Om zelf te leren programmeren ben ik begonnen door oefenprojecten te bouwen en deze processen te delen op
                    YouTube. Om te zien met welk project ik nu bezig ben kun je mijn laatste YouTube video's kijken, het
                    #project-updates kanaal op Discord checken of abonneren op mijn nieuwsbrief.</p>

                <a href="https://www.youtube.com/@JairEmanuels/videos" class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded-lg shadow-lg transition duration-300 ease-in-out" target="_blank" rel="noopener noreferrer">Ontdek mijn YouTube-kanaal</a>
            </div>

            <div class="lg:w-1/2 w-full relative">
                <?php
                $rss = simplexml_load_file('https://www.youtube.com/feeds/videos.xml?channel_id=UCewiBDBuReqnbVLVZlXQ_sg');
                if ($rss === FALSE) {
                    echo '<p>Er is een fout opgetreden bij het ophalen van de RSS feed.</p>';
                } else {
                    $video = $rss->entry[0];
                    $videoId = (string) $video->id;
                    $videoId = str_replace('yt:video:', '', $videoId);
                    $description = (string) $video->summary;
                    $thumbnailUrl = (string) $video->link->attributes()->href;
                    echo "<div class='mb-8'>";
                    echo "<div class='video-container'><iframe src='https://www.youtube.com/embed/{$videoId}' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
                    echo "<p class='text-gray-700'>{$description}</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>

    <script src="/assets/js/typewrite.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>