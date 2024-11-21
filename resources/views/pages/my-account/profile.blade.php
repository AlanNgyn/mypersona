@extends('layouts.app')

<style>
.title {
    font-size: 18px;
    font-weight: 600;
    padding: 20px 15px;
    background-color: #fff;
}
.container {
    color: #1C1C1C;
    background-color: #e7e7e7;
}

.section {
    padding: 0 15px;
    background-color: #fff;
    padding-bottom: 25px;
}

.section h2 {
    font-size: 16px;
    margin-bottom: 16px;
    color: #1C1C1C;
    display: flex;
    align-items: center;
    font-weight: 400;
}

.section img {
    padding-right: 10px;
    margin-top: -3px;
}

.section.password {
    margin-top: 5px;
    padding-top: 25px;
}

.form-section {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.form-section .name-group {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 15px;
}

.form-group {
    display: flex;
    flex-direction: column;
    position: relative;
}

.form-group label {
    font-size: 12px;
    color: #393939;
    position: absolute;
    display: inline-block;
    background-color: #fff;
    left: 15px;
    top: -8px;
    padding: 0 4px;
}

.form-group input {
    padding: 15px;
    font-size: 16px;
    border: 1px solid #555555;
    height: 56px;
    color: #1C1C1C;
}

.form-group input:disabled {
    background-color: #F2F2F2;
    color: #AAA;
    border: 1px solid #E7E7E7;
}
.button-submit {
    display: flex;
    justify-content:flex-end
}
.save-btn {
    background-color: black;
    color: #fff;
    padding: 15px;
    font-size: 16px;
    border: none;
    width: 183px;
    cursor: pointer;
    text-align: center;
    margin-top: 16px;
}

.save-btn:hover {
    background-color: #333;
}

.section.password .form-group label {
    display: none;
}
.section.password .form-group input {
    border: 1px solid #AAA;
}
.section.password .save-btn {
    margin-top: 5px;
}

</style>

@section('content')
    <div class="container">
        <div class="title"><span>Profile & security page</span></div>
        <div class="profile-container">
            <div class="section">
                <h2><img src="{{ asset('images/my-account/user.png') }}" alt=""> Personal Information</h2>
                <form class="form-section">
                    <div class="name-group">
                        <div class="form-group">
                            <label for="first-name">First name</label>
                            <input type="text" id="first-name" value="Rina">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last name</label>
                            <input type="text" id="last-name" value="Kim">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id="email" value="rinakim@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="label">Label</label>
                        <input type="text" id="label" value="85901042" disabled>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of birth</label>
                        <input type="text" id="dob" value="01/01/2000">
                    </div>
                    <div class="button-submit">
                        <button type="submit" class="save-btn">Save changes</button>
                    </div>
                </form>
            </div>
            <div class="section password">
                <h2><img src="{{ asset('images/my-account/profile.png') }}" alt=""> Password</h2>
                <form class="form-section">
                    <div class="form-group">
                        <label for="current-password">Current password</label>
                        <input type="password" id="current-password" placeholder="Current password">
                    </div>
                    <div class="form-group">
                        <label for="new-password">Enter new password (min. 8 characters)</label>
                        <input type="password" id="new-password" placeholder="Enter new password (min. 8 characters)">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm new password</label>
                        <input type="password" id="confirm-password" placeholder="Confirm new password">
                    </div>
                    <div class="button-submit">
                        <button type="submit" class="save-btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection