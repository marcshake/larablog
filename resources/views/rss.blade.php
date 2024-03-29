<?php print '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<rss version="2.0">

    <channel>
        <title>{{$title}}</title>
        <link>https://trancefish.de/</link>
        <description>Free web building tutorials</description>
        @foreach ($posts as $item)
        <item>
            <title>{{$item->title}}</title>
            <link>{{$item->link}}/</link>
            <image>
                <url>
                    {{$item->mainImage ? asset('storage/thumbnail/'.$item->mainImagePath->filename): asset('images/wall.jpg')}}
                </url>
                <title>{{$item->title}}</title>

            </image>
            <pubDate>
                {{$item->created_at->toRfc822String('%d.%m.%Y')}}
            </pubDate>
            <description>
                <![CDATA[{!! $item->contents !!} ]]>
            </description>
            @foreach ($item->Tags as $tags)
            <category>
                {{$tags->tag}}
            </category>

            @endforeach

        </item>

        @endforeach

    </channel>

</rss>
