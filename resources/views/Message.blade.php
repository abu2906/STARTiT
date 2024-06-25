@extends('layouts.app')

@section('main-content')
<div class="container-message">
    <div class="sidebar-message">
        <div class="search-bar p-3">
            <input type="text" class="form-control" placeholder="Search or start a new chat">
        </div>
        <ul class="chat-list">
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">12:46 PM</span>
            </li>
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">12:45 PM</span>
            </li>
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">12:28 PM</span>
            </li>
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">12:25 PM</span>
            </li>
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">11:50 AM</span>
            </li>
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">8:26 AM</span>
            </li>
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">8:20 AM</span>
            </li>
            <li>
                <div class="chat-details">
                    <span class="chat-name">Pengguna</span>
                    <span class="chat-message">Isi pesan antara</span>
                </div>
                <span class="chat-time" style="font-size: 12px;">Yesterday</span>
            </li>
        </ul>
    </div>
    <div class="col-8 main-content">
        <div class="chat-header p-3">
            <div class="chat-header-details">
                <h3>Nama Pengguna</h3>
            </div>
            <div class="chat-header-icons">
                <i class="fas fa-search"></i>
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="chat-footer p-3">
            <input type="text" class="form-control" placeholder="Type a message">
            <button class="btn-send"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>
</div>
@endsection