<!-- INCLUDE BLOCK : header -->
<div id="leftindex">
      <div class="block">
       <div class="title">{info_title}</div>
       <div class="content">{info_content}</div>
     </div>
     <div class="block">
       <div class="title">{categories_title}</div>
       <div class="content">{categories_content}</div>
     </div>
     <div class="block">
       <div class="title">{shoutbox_title}</div>
       <div class="content">{shoutbox_content}</div>
     </div>

     <div class="block">
       <div class="title">{poll_title}</div>
       <div class="content">{poll_content}</div>
     </div>
</div>
<div id="rightindex">
     <div id="welcome">{welcome}</div>
     <div class="block">
       <div class="title">{recent_title}</div>
       <div class="content">
<!-- START BLOCK : recentblock -->
<div class="recentbox">
<div class="title">{title} by {author}  {roundrobin}  [{reviews} - {numreviews}]</div>
<div class="content"><span class="label">Summary: </span>{featuredstory}{summary}<br />
<span class="label">Rated:</span> {rating} {score}<br />
<span class="label">Categories:</span> {category} <br />
<span class="label">Characters: </span> {characters}<br />
{classifications}
<span class="label">Series:</span> {serieslinks}<br />
<span class="label">Chapters: </span> {numchapters} {toc}<br />
<span class="label">Completed:</span> {completed}  
<span class="label">Word count:</span> {wordcount} <span class="label">Read Count:</span> {count}
<span class="label"> Published: </span>{published} <span class="label">Updated:</span> {updated} </div>
</div>
<!-- END BLOCK : recentblock -->
       </div>
     </div>
     <div class="block">
       <div class="title">{news_title}</div>
       <div class="content">{news_content}<div style='text-align: center'>{newsarchive}</div></div>
    </div>
</div>
<!-- INCLUDE BLOCK : footer -->