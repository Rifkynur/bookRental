<div class="col-2 sidebar ">
    <ul>
        @if (Auth::user()->role_id = 1)
        <li>
            <a href="/dashboard" class="{{ request()->route()->uri === "dashboard" ? "active" : "" }}">Dashboard</a>
        </li>
        <li>
            <a href="/books" class="{{ request()->route()->uri === "books" ? "active" : "" }}">Books</a>
        </li>
        <li >
            <a href="/categories" class="{{ request()->route()->uri === "categories" ? "active" : "" }}">Categories</a>
        </li>
        <li>
            <a href="/users" class="{{ request()->route()->uri === "users" ? "active" : "" }}">Users</a>
        </li>
        <li>
            <a href="/rent-logs" class="{{ request()->route()->uri === "rent-logs" ? "active" : "" }}">Rent Logs</a>
        </li> 
        @else
        <li>
            <a href="/profile" class="{{ request()->route()->uri === "profile" ? "active" : "" }}">Profile</a>
        </li>
        @endif
        <li>
            <a href="/logout">Logout</a>
        </li>
    </ul>
</div>