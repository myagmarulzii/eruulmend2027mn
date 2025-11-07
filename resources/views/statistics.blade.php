@extends('layout')

@section('title', 'Статистик - Эрүүл мэндийг дэмжих жил 2027')

@section('extra-css')
<style>
    .stats-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .stats-header h2 {
        color: #667eea;
        font-size: 2em;
        margin-bottom: 10px;
    }

    .total-count {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 40px;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .total-count h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .total-count .number {
        font-size: 3em;
        font-weight: bold;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .stat-card {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 12px;
        border-left: 5px solid #667eea;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .stat-card h4 {
        color: #667eea;
        margin-bottom: 15px;
        font-size: 1.2em;
    }

    .stat-card .count {
        font-size: 2.5em;
        font-weight: bold;
        color: #764ba2;
    }

    .stat-card .label {
        color: #666;
        margin-top: 5px;
    }

    .no-data {
        text-align: center;
        padding: 60px 20px;
        background: #f8f9fa;
        border-radius: 12px;
    }

    .no-data p {
        font-size: 1.2em;
        color: #666;
        margin-bottom: 20px;
    }

    .no-data a {
        display: inline-block;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: transform 0.3s ease;
    }

    .no-data a:hover {
        transform: translateY(-2px);
    }

    .chart-container {
        margin-top: 40px;
        padding: 30px;
        background: #f8f9fa;
        border-radius: 12px;
    }

    .bar {
        margin-bottom: 20px;
    }

    .bar-label {
        font-weight: bold;
        margin-bottom: 8px;
        color: #555;
    }

    .bar-container {
        background: #e0e0e0;
        border-radius: 10px;
        height: 30px;
        position: relative;
        overflow: hidden;
    }

    .bar-fill {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        height: 100%;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 10px;
        color: white;
        font-weight: bold;
        transition: width 0.5s ease;
    }
</style>
@endsection

@section('content')
<div class="stats-header">
    <h2>📊 Саналын статистик мэдээлэл</h2>
    <p style="color: #666;">Төрөл бүрээр ирсэн санал хүсэлтийн тоо</p>
</div>

@if($totalSuggestions > 0)
    <div class="total-count">
        <h3>Нийт ирсэн санал хүсэлт</h3>
        <div class="number">{{ $totalSuggestions }}</div>
    </div>

    <div class="stats-grid">
        @foreach($stats as $stat)
            <div class="stat-card">
                <h4>{{ $stat->category }}</h4>
                <div class="count">{{ $stat->total }}</div>
                <div class="label">санал ирсэн</div>
            </div>
        @endforeach
    </div>

    <div class="chart-container">
        <h3 style="margin-bottom: 20px; color: #667eea;">Харьцуулалт</h3>
        @foreach($stats as $stat)
            <div class="bar">
                <div class="bar-label">{{ $stat->category }}</div>
                <div class="bar-container">
                    <div class="bar-fill" style="width: {{ ($stat->total / $totalSuggestions) * 100 }}%">
                        {{ $stat->total }} ({{ number_format(($stat->total / $totalSuggestions) * 100, 1) }}%)
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="no-data">
        <p>Одоогоор санал хүсэлт ороогүй байна.</p>
        <a href="{{ route('home') }}">Анхны санал илгээх</a>
    </div>
@endif
@endsection
