<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-stone-850 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <!-- Quick Stats Cards (Moved to top & redesigned) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1: Sales Today -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#C9A84C]/15 flex items-center justify-between hover:shadow-md transition-all duration-300">
                <div>
                    <p class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Total Sales Today</p>
                    <h4 class="text-2xl font-extrabold text-[#1A0A05] mt-2">₹ 0.00</h4>
                </div>
                <div class="p-3 bg-[#C9A84C]/10 rounded-xl text-[#C9A84C]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>

            <!-- Card 2: Expenses Today -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#8C1C13]/10 flex items-center justify-between hover:shadow-md transition-all duration-300">
                <div>
                    <p class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Total Expenses Today</p>
                    <h4 class="text-2xl font-extrabold text-[#1A0A05] mt-2">₹ 0.00</h4>
                </div>
                <div class="p-3 bg-[#8C1C13]/10 rounded-xl text-[#8C1C13]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
            </div>

            <!-- Card 3: Items in Stock -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200/60 flex items-center justify-between hover:shadow-md transition-all duration-300">
                <div>
                    <p class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Items in Stock</p>
                    <h4 class="text-2xl font-extrabold text-[#1A0A05] mt-2">0</h4>
                </div>
                <div class="p-3 bg-stone-100 rounded-xl text-stone-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
            </div>

            <!-- Card 4: Active Users -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200/60 flex items-center justify-between hover:shadow-md transition-all duration-300">
                <div>
                    <p class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Active Users</p>
                    <h4 class="text-2xl font-extrabold text-[#1A0A05] mt-2">1</h4>
                </div>
                <div class="p-3 bg-[#E8C97A]/10 rounded-xl text-[#C9A84C]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Daily Sales Graph -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-100">
                <h3 class="text-lg font-bold text-[#1A0A05] mb-4">Daily Sales</h3>
                <div class="relative h-64">
                    <canvas id="dailySalesChart"></canvas>
                </div>
            </div>

            <!-- Daily Expense Graph -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-100">
                <h3 class="text-lg font-bold text-[#1A0A05] mb-4">Daily Expenses</h3>
                <div class="relative h-64">
                    <canvas id="dailyExpenseChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Sales vs Purchases Bar Graph -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-100 mb-6">
            <h3 class="text-lg font-bold text-[#1A0A05] mb-4">Sales vs Purchases</h3>
            <div class="relative h-80">
                <canvas id="salesPurchasesChart"></canvas>
            </div>
        </div>
    </div>

    @push('modals')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set Chart.js Defaults
            Chart.defaults.font.family = "'Figtree', sans-serif";
            Chart.defaults.color = '#8A8A8A';

            // Daily Sales Chart
            const salesCtx = document.getElementById('dailySalesChart').getContext('2d');
            const salesGradient = salesCtx.createLinearGradient(0, 0, 0, 240);
            salesGradient.addColorStop(0, 'rgba(201, 168, 76, 0.25)');
            salesGradient.addColorStop(1, 'rgba(201, 168, 76, 0.0)');

            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Sales (₹)',
                        data: [1200, 1900, 3000, 2500, 2200, 4500, 3800],
                        borderColor: '#C9A84C',
                        borderWidth: 3,
                        pointBackgroundColor: '#C9A84C',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        backgroundColor: salesGradient,
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
                        y: { 
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(201, 168, 76, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Daily Expense Chart
            const expenseCtx = document.getElementById('dailyExpenseChart').getContext('2d');
            const expenseGradient = expenseCtx.createLinearGradient(0, 0, 0, 240);
            expenseGradient.addColorStop(0, 'rgba(140, 28, 19, 0.25)');
            expenseGradient.addColorStop(1, 'rgba(140, 28, 19, 0.0)');

            new Chart(expenseCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Expenses (₹)',
                        data: [800, 1200, 900, 1500, 1100, 2000, 1300],
                        borderColor: '#8C1C13',
                        borderWidth: 3,
                        pointBackgroundColor: '#8C1C13',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        backgroundColor: expenseGradient,
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
                        y: { 
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(140, 28, 19, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
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
                            backgroundColor: '#8C1C13',
                            borderRadius: 6,
                        },
                        {
                            label: 'Purchases',
                            data: [10000, 13000, 15000, 12000, 18000, 16000],
                            backgroundColor: '#C9A84C',
                            borderRadius: 6,
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { 
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.03)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
    @endpush
</x-app-layout>