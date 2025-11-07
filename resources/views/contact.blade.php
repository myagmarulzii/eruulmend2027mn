@extends('layout')

@section('title', 'Холбоо барих - Эрүүл мэндийг дэмжих жил 2027')

@section('extra-css')
<style>
    .contact-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .contact-header h2 {
        color: #667eea;
        font-size: 2em;
        margin-bottom: 15px;
    }

    .contact-header p {
        color: #666;
        font-size: 1.1em;
        line-height: 1.6;
    }

    .contact-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 40px;
    }

    .info-card {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-top: 4px solid #667eea;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .info-card .icon {
        font-size: 3em;
        margin-bottom: 15px;
    }

    .info-card h3 {
        color: #667eea;
        margin-bottom: 15px;
        font-size: 1.3em;
    }

    .info-card p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 10px;
    }

    .info-card a {
        color: #764ba2;
        text-decoration: none;
        font-weight: bold;
    }

    .info-card a:hover {
        text-decoration: underline;
    }

    .map-section {
        margin-top: 50px;
        padding: 30px;
        background: #f8f9fa;
        border-radius: 12px;
    }

    .map-section h3 {
        color: #667eea;
        margin-bottom: 20px;
        text-align: center;
    }

    .office-info {
        background: white;
        padding: 25px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .office-info h4 {
        color: #764ba2;
        margin-bottom: 15px;
    }

    .office-info ul {
        list-style: none;
        padding-left: 0;
    }

    .office-info li {
        padding: 10px 0;
        border-bottom: 1px solid #e0e0e0;
        color: #555;
    }

    .office-info li:last-child {
        border-bottom: none;
    }

    .office-info li strong {
        color: #667eea;
        display: inline-block;
        width: 120px;
    }
</style>
@endsection

@section('content')
<div class="contact-container">
    <div class="contact-header">
        <h2>📞 Холбоо барих</h2>
        <p>Манай байгууллагатай холбоо барих хэрэгтэй мэдээллүүд</p>
    </div>

    <div class="contact-info">
        <div class="info-card">
            <div class="icon">📧</div>
            <h3>Имэйл хаяг</h3>
            <p>
                <a href="mailto:info@health2027.mn">info@health2027.mn</a>
            </p>
            <p>
                <a href="mailto:support@health2027.mn">support@health2027.mn</a>
            </p>
        </div>

        <div class="info-card">
            <div class="icon">📱</div>
            <h3>Утас</h3>
            <p>Утас: <a href="tel:+97611-123456">+976 11-123456</a></p>
            <p>Факс: +976 11-123457</p>
            <p>Яаралтай: <a href="tel:+97699123456">+976 99-123456</a></p>
        </div>

        <div class="info-card">
            <div class="icon">🏢</div>
            <h3>Албан ёсны хаяг</h3>
            <p>Монгол Улс, Улаанбаатар хот</p>
            <p>Сүхбаатар дүүрэг</p>
            <p>Эрүүл мэндийн яам</p>
        </div>

        <div class="info-card">
            <div class="icon">⏰</div>
            <h3>Ажлын цаг</h3>
            <p>Даваа - Баасан</p>
            <p>09:00 - 18:00</p>
            <p>Амралтын өдөр: Бямба, Ням</p>
        </div>
    </div>

    <div class="map-section">
        <h3>Оффисын байршил</h3>
        <div class="office-info">
            <h4>Эрүүл мэндийн яамны байр</h4>
            <ul>
                <li><strong>Хаяг:</strong> Засгийн газрын II байр, Улаанбаатар 15160</li>
                <li><strong>Байршил:</strong> Сүхбаатар талбайн зүүн талд</li>
                <li><strong>Нийтийн тээвэр:</strong> 7, 22, 32 дугаар автобус</li>
                <li><strong>Ойролцоо:</strong> Төв шуудан, Зах оргил</li>
            </ul>
        </div>

        <div class="office-info" style="margin-top: 20px;">
            <h4>Санал хүсэлт илгээх</h4>
            <p style="line-height: 1.8; color: #555;">
                Та манай вэбсайтаар дамжуулан санал, хүсэлтээ илгээж болно.
                <a href="{{ route('home') }}" style="color: #764ba2; font-weight: bold;">Нүүр хуудас</a> руу орж
                формыг бөглөнө үү. Таны санал бидэнд маш чухал бөгөөд бүх саналыг анхааралтай авч үзэх болно.
            </p>
        </div>
    </div>
</div>
@endsection
