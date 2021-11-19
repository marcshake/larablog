<nav>
    <ul>
        <li>{{ __('blog') }}<ul>
                <li><a href="{{ url('admin/blogs') }}">{{ __('List of Entries') }}</a></li>
                <li><a href="{{ url('admin/new') }}">{{ __('Create New') }}</a></li>
                <li><a href="#">{{ __('Blog Categories') }}</a></li>
                <li><a href="#">{{ __('Keywords') }}</a></li>
            </ul>
        </li>
        <li>
            {{ __('media') }}<ul>
                <li><a href="{{ url('admin/filer') }}">{{ __('Media') }}</a></li>
            </ul>
        </li>
        <li>{{ __('Pages') }}<ul>
                <li><a href="#">{{ __('All Pages') }}</a></li>
                <li><a href="#">{{ __('Add Page') }}</a></li>
                <li><a href="#">{{ __('All Pages') }}</a></li>
            </ul>
        </li>
        </li>
    </ul>
</nav>
