<aside class="menu has-background-black-bis">
    <p class="menu-label">Dashboard</p>
    <ul class="menu-list">
        <li>
            <a href="{{url('admin')}}" {!!Request::is('admin')?'class="active"':''!!}>
                Startseite
            </a>
        </li>
    </ul>
    <p class="menu-label">Benutzer</p>
    <ul class="menu-list">
        <li><a {!!Request::is('admin/user')?'class="active"':''!!} href="{{url('admin/user')}}">Benutzerverwaltung</a></li>
    </ul>


    <p class="menu-label">
        Beiträge
    </p>
    <ul class="menu-list">
        <li>
            <a href="{{url('admin/blogs')}}" {!!Request::is('admin/blogs')?'class="active"':''!!}>Alle
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
            <a href="{{url('admin/cms/new')}}"
               {!!Request::is('admin/cms/new')?'class="active"':''!!}>Neue Contentseite</a>
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
