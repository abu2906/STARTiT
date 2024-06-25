@extends('layouts.app2')

@section('main-content')
<div class="container_adm">
    <header>
        <h1>Admin Settings</h1>
        <nav>
            <ul>
                <li><a href="#general">General</a></li>
                <li><a href="#users">Users</a></li>
                <li><a href="#security">Security</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="general">
            <h2>General Settings</h2>
            <form>
                <label for="site-name">Site Name:</label>
                <input type="text" id="site-name" name="site-name" required>
                
                <label for="site-url">Site URL:</label>
                <input type="url" id="site-url" name="site-url" required>
                
                <button type="submit">Save</button>
            </form>
        </section>
        
        <section id="users">
            <h2>User Management</h2>
            <button>Add New User</button>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- User rows will go here -->
                </tbody>
            </table>
        </section>
        
        <section id="security">
            <h2>Security Settings</h2>
            <form>
                <label for="password-policy">Password Policy:</label>
                <select id="password-policy" name="password-policy">
                    <option value="weak">Weak</option>
                    <option value="medium">Medium</option>
                    <option value="strong">Strong</option>
                </select>    
                <button type="submit">Save</button>
            </form>
        </section>
    </main>
</div>
@endsection
