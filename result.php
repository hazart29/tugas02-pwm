<?php
if (isset($_GET['submit'])) {
    $url = $_GET['url'];
    shortcuttly($url);
}

function shortcuttly($url)
{
  $a = $url;
  $longUrl = urlencode($a);
  $json = file_get_contents("https://cutt.ly/api/api.php?key=9f523dd389e19df88986ad27419a4385b7a0e&short=$longUrl");
  $data = json_decode($json, true);

  $status = $data["url"]["status"];
  $fullLink = $data["url"]["fullLink"];
  $date = $data["url"]["date"];
  $shortLink = $data["url"]["shortLink"];
  $title = $data["url"]["title"];

  if ($json) {
?>
    <div class="card bg-dark border-0">
      <div class="card-header border-0">
        Berhasil membuat shortlink!
      </div>
      <div class="card-body border-0">
        <blockquote class="blockquote mb-0">
          <p class="text-primary">Shortlink :
            <?php echo $shortLink; ?>
          </p>
          <p><a href="detail.php?status=<?php echo $status ?>&fullLink=<?php echo $fullLink ?>&date=<?php echo $date ?>&shortLink=<?php echo $shortLink ?>&title=<?php echo $title ?>">detail</a></p>
        </blockquote>
      </div>
    </div>
<?php
  } else {
    echo "Error";
  }
}
?>