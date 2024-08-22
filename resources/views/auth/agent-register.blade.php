@extends('layouts.app')

@section('title', 'Agent Sign Up')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Agent Sign Up</h2>
    <ul class="nav nav-tabs" id="agentTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="individual-tab" data-toggle="tab" href="#individual" role="tab" aria-controls="individual" aria-selected="true">Individual Agent</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company" aria-selected="false">Company Agent</a>
        </li>
    </ul>
    <div class="tab-content mt-3" id="agentTabContent">
        <!-- Individual Agent Form -->
        <div class="tab-pane fade show active" id="individual" role="tabpanel" aria-labelledby="individual-tab">
            <form action="{{ route('agent.register.individual.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="nin">NIN (National Identification Number)</label>
                    <input type="file" class="form-control-file" id="nin" name="nin" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="agree-terms" name="agree_terms" required>
                    <label class="form-check-label" for="agree-terms">I agree to the <a href="#">Terms and Conditions</a></label>
                </div>

                <button type="submit" class="btn btn-primary">Sign Up as Individual Agent</button>
            </form>
        </div>

        <!-- Company Agent Form -->
        <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
            <form action="{{ route('agent.register.company.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="company-name">Company Name</label>
                    <input type="text" class="form-control" id="company-name" name="company_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="cac">CAC Document</label>
                    <input type="file" class="form-control-file" id="cac" name="cac" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="agree-terms" name="agree_terms" required>
                    <label class="form-check-label" for="agree-terms">I agree to the <a href="#">Terms and Conditions</a></label>
                </div>

                <button type="submit" class="btn btn-primary">Sign Up as Company Agent</button>
            </form>
        </div>
    </div>
</div>

<!-- Script to handle tab selection and maintain state on reload -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Check if a tab was previously selected
        let selectedTab = localStorage.getItem('selectedTab');
        if (selectedTab) {
            // Remove 'active' and 'show' classes from current active tab and pane
            document.querySelector('.nav-link.active').classList.remove('active');
            document.querySelector('.tab-pane.show.active').classList.remove('show', 'active');

            // Add 'active' class to the selected tab link and 'show active' to the corresponding pane
            document.querySelector(`.nav-link[href="${selectedTab}"]`).classList.add('active');
            document.querySelector(selectedTab).classList.add('show', 'active');
        }

        // Add event listeners to tabs to store the selected tab
        document.querySelectorAll('.nav-link').forEach(tab => {
            tab.addEventListener('click', function (event) {
                event.preventDefault();  // Prevent default link behavior
                let targetTab = event.target.getAttribute('href');

                // Remove 'active' and 'show' classes from current active tab and pane
                document.querySelector('.nav-link.active').classList.remove('active');
                document.querySelector('.tab-pane.show.active').classList.remove('show', 'active');

                // Add 'active' class to clicked tab and 'show active' to the corresponding pane
                event.target.classList.add('active');
                document.querySelector(targetTab).classList.add('show', 'active');

                // Store the selected tab in localStorage
                localStorage.setItem('selectedTab', targetTab);
            });
        });
    });
</script>
@endsection
