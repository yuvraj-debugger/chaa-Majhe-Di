<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Daily Sales Graph -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Daily Sales</h3>
                <div class="relative h-64">
                    <canvas id="dailySalesChart"></canvas>
                </div>
            </div>

            <!-- Daily Expense Graph -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Daily Expenses</h3>
                <div class="relative h-64">
                    <canvas id="dailyExpenseChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Sales vs Purchases Bar Graph -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Sales vs Purchases</h3>
            <div class="relative h-80">
                <canvas id="salesPurchasesChart"></canvas>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-indigo-500 p-6 rounded-xl shadow-sm text-white">
                <p class="text-indigo-100 text-sm font-medium uppercase">Total Sales Today</p>
                <h4 class="text-2xl font-bold mt-1">₹ 0.00</h4>
            </div>
            <div class="bg-rose-500 p-6 rounded-xl shadow-sm text-white">
                <p class="text-rose-100 text-sm font-medium uppercase">Total Expenses Today</p>
                <h4 class="text-2xl font-bold mt-1">₹ 0.00</h4>
            </div>
            <div class="bg-emerald-500 p-6 rounded-xl shadow-sm text-white">
                <p class="text-emerald-100 text-sm font-medium uppercase">Items in Stock</p>
                <h4 class="text-2xl font-bold mt-1">0</h4>
            </div>
            <div class="bg-amber-500 p-6 rounded-xl shadow-sm text-white">
                <p class="text-amber-100 text-sm font-medium uppercase">Active Users</p>
                <h4 class="text-2xl font-bold mt-1">1</h4>
            </div>
        </div>
    </div>

    @push('modals')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Daily Sales Chart
            const salesCtx = document.getElementById('dailySalesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Sales (₹)',
                        data: [1200, 1900, 3000, 2500, 2200, 4500, 3800],
                        borderColor: 'rgb(79, 70, 229)',
                        backgroundColor: 'rgba(79, 70, 229, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });

            // Daily Expense Chart
            const expenseCtx = document.getElementById('dailyExpenseChart').getContext('2d');
            new Chart(expenseCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Expenses (₹)',
                        data: [800, 1200, 900, 1500, 1100, 2000, 1300],
                        borderColor: 'rgb(225, 29, 72)',
                        backgroundColor: 'rgba(225, 29, 72, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });

            // Sales vs Purchases Chart
            const spCtx = document.getElementById('salesPurchasesChart').getContext('2d');
            new Chart(spCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [
                        {
                            label: 'Sales',
                            data: [12000, 15000, 18000, 14000, 21000, 19000],
                            backgroundColor: 'rgb(79, 70, 229)',
                        },
                        {
                            label: 'Purchases',
                            data: [10000, 13000, 15000, 12000, 18000, 16000],
                            backgroundColor: 'rgb(148, 163, 184)',
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        });
    </script>
    @endpush
</x-app-layout>