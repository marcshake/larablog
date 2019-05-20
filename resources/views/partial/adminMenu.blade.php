<aside class="menu has-background-black-bis">
    <p class="menu-label">Dashboard</p>
    <ul class="menu-list">
        <li>
            <a href="{{url('admin')}}" {!!Request::is('admin')?'class="active"':''!!}>
            Startseite
            </a>
        </li>
    </ul>
    <p class="menu-label">
    Beiträge
    </p>
    <ul class="menu-list">
        <li>
        <a href="{{url('admin/blogs')}}" {!!Request::is(' admin/blogs')?'class="active"':''!!}>Alle
        Beiträge</a> </li> <li>
        <a href="{{url('admin/new')}}" {!!Request::is('admin/new')?'class="active"':''!!}>Neuer Beitrag</a>
        </li>
    </ul>
    <p class="menu-label">
    Contentseiten
    </p>
    <ul class="menu-list">
        <li>
        <a href="{{url('admin/cms')}}" {!!Request::is('admin/cms')?'class="active"':''!!}>Alle
        Contentseiten</a> </li> <li>
        <a href="{{url('admin/cmsnew')}}"
        {!!Request::is('admin/cmsnew')?'class="active"':''!!}>Neue Contentseite</a>
        </li>
    </ul> <p class="menu-label">
    Bilder / Videos
    </p>
    <ul class="menu-list">
        <li>
        <a href="{{url('admin/filer')}}"
        {!!Request::is('admin/filer')?'class="active"':''!!}>Bilder </a> </li>
    </ul>
</aside>
