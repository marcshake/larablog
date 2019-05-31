<?php print '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<rss version="2.0">

<channel>
  <title>{{$title}}</title>
  <link>https://www.w3schools.com</link>
  <description>Free web building tutorials</description>
  @foreach ($posts as $item)
  <item>
    <title>{{$item->title}}</title>
    <link>{{$item->link}}</link>
    <description><![CDATA[{{$item->contents}} ]]></description>
  </item>

  @endforeach

</channel>

</rss>
