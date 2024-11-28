@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <!-- Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Card 1 -->
        <div class="card">
            <div class="icon text-blue-500">
                <i class="fas fa-user"></i>
            </div>
            <h3 class="card-title">User Management</h3>
            <p class="card-description">Manage user accounts and profiles effectively.</p>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <div class="icon text-green-500">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <h3 class="card-title">Orders</h3>
            <p class="card-description">View and process customer orders seamlessly.</p>
        </div>
        
        <!-- Card 3 -->
        <div class="card">
            <div class="icon text-red-500">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3 class="card-title">Analytics</h3>
            <p class="card-description">Track and analyze your business performance.</p>
        </div>
    </div>

    <!-- Report Table Section -->
    <div class="report-section">
        <div class="flex justify-between items-center mb-4">
        </div>
        <table class="report-table w-full">
            <thead>
                <tr>
                    <th class="table-header">ID</th>
                    <th class="table-header">Name</th>
                    <th class="table-header">Email</th>
                    <th class="table-header">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-data">1</td>
                    <td class="table-data">John Doe</td>
                    <td class="table-data">john.doe@example.com</td>
                    <td class="table-data">Active</td>
                </tr>
                <tr>
                    <td class="table-data">2</td>
                    <td class="table-data">Jane Smith</td>
                    <td class="table-data">jane.smith@example.com</td>
                    <td class="table-data">Inactive</td>
                </tr>
            </tbody>
        </table>
        <button class="save-button">Save</button>
    </div>
</div>
@endsection

<style>
/* General Styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
}

/* Grid Styling */
.grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 768px) {
    .grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Card Styling */
.card {
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 4.5rem;
    transition: box-shadow 0.3s ease;
}

/* Specific Background Colors for Each Card */
.card:nth-child(1) {
    background-color: #E3F2FD; /* Light Blue */
}

.card:nth-child(2) {
    background-color: #E8F5E9; /* Light Green */
}

.card:nth-child(3) {
    background-color: #FFEBEE; /* Light Red */
}

.card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Icon Styling */
.icon {
    display: flex;
    justify-content: center;
    font-size: 2rem;
    margin-bottom: 1rem;
}

/* Text Styling */
.card-title {
    font-size: 1.125rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 0.5rem;
}

.card-description {
    color: #4a5568;
    text-align: center;
}

/* Report Table Section */
.report-section {
    margin-top: 5rem;
}

/* Updated Table Styling */
.report-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
}

.table-header {
    background-color: #55698c; /* Dark Gray */
    color: #ffffff;
    text-align: left;
    padding: 1rem;
    font-size: 1rem;
    font-weight: bold;
}

.table-data {
    padding: 1rem;
    font-size: 0.9rem;
    color: #4A5568; /* Neutral Gray */
    border-bottom: 1px solid #e2e8f0;
    text-align: left;
}

.table-data:last-child {
    border-bottom: none;
}

/* Alternating Row Colors */
.report-table tbody tr:nth-child(odd) {
    background-color: #f7fafc; /* Light Gray */
}

.report-table tbody tr:nth-child(even) {
    background-color: #edf2f7; /* Slightly Darker Light Gray */
}

/* Hover Effect */
.report-table tbody tr:hover {
    background-color: #e2e8f0; /* Subtle Highlight */
}

/* Save Button Enhancement */
.save-button {
    background-color: #5d9bd4; /* Blue */
    color: #ffffff;
    font-size: 1rem;
    padding: 0.5rem 1.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    display: inline-block;
    margin-top: 1rem;
}

.save-button:hover {
    background-color: #2B6CB0; /* Darker Blue */
    transform: scale(1.05);
}

.save-button:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.5);
}
</style>
