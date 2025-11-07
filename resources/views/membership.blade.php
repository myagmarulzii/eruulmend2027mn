@extends('layout')

@section('title', 'ТББ-д гишүүнээр элсэх - Эрүүл мэндийг дэмжих жил 2027')

@section('extra-css')
<style>
    .membership-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .membership-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .membership-header h2 {
        color: #667eea;
        font-size: 2em;
        margin-bottom: 15px;
    }

    .membership-header p {
        color: #666;
        font-size: 1.1em;
        line-height: 1.8;
    }

    .benefits-section {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 30px;
    }

    .benefits-section h3 {
        color: #667eea;
        margin-bottom: 20px;
        font-size: 1.5em;
    }

    .benefits-list {
        list-style: none;
        padding: 0;
    }

    .benefits-list li {
        padding: 15px;
        margin-bottom: 10px;
        background: white;
        border-radius: 8px;
        border-left: 4px solid #764ba2;
        display: flex;
        align-items: flex-start;
    }

    .benefits-list li::before {
        content: "✓";
        color: #667eea;
        font-weight: bold;
        font-size: 1.5em;
        margin-right: 15px;
    }

    .requirements-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 30px;
    }

    .requirements-section h3 {
        margin-bottom: 20px;
        font-size: 1.5em;
    }

    .requirements-list {
        list-style: none;
        padding: 0;
    }

    .requirements-list li {
        padding: 12px 0;
        border-bottom: 1px solid rgba(255,255,255,0.2);
        padding-left: 30px;
        position: relative;
    }

    .requirements-list li:last-child {
        border-bottom: none;
    }

    .requirements-list li::before {
        content: "→";
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .process-section {
        margin-bottom: 30px;
    }

    .process-section h3 {
        color: #667eea;
        margin-bottom: 25px;
        font-size: 1.5em;
        text-align: center;
    }

    .process-steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .step {
        text-align: center;
        padding: 25px;
        background: #f8f9fa;
        border-radius: 12px;
        transition: transform 0.3s ease;
    }

    .step:hover {
        transform: translateY(-5px);
    }

    .step-number {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5em;
        font-weight: bold;
        margin: 0 auto 15px;
    }

    .step h4 {
        color: #667eea;
        margin-bottom: 10px;
    }

    .step p {
        color: #666;
        line-height: 1.6;
    }

    .contact-cta {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        margin-top: 30px;
    }

    .contact-cta h3 {
        color: #667eea;
        margin-bottom: 15px;
    }

    .contact-cta p {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .cta-button {
        display: inline-block;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 40px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }
</style>
@endsection

@section('content')
<div class="membership-container">
    <div class="membership-header">
        <h2>🏥 Эрүүл мэнд хөгжлийн зуун ТББ-д гишүүнээр элсэх</h2>
        <p>
            Та эрүүл мэндийн салбарын хөгжилд хувь нэмрээ оруулахыг хүсч байна уу?
            Манай төрийн бус байгууллагад гишүүнээр элсэж, эрүүл мэндийн салбарыг
            хамтдаа хөгжүүлцгээе!
        </p>
    </div>

    <div class="benefits-section">
        <h3>Гишүүнчлэлийн давуу тал</h3>
        <ul class="benefits-list">
            <li>Эрүүл мэндийн мэргэжилтнүүдийн сүлжээнд нэгдэх боломж</li>
            <li>Мэргэжлийн сургалт, семинарт үнэ төлбөргүй хамрагдах</li>
            <li>Олон улсын хамтын ажиллагаанд оролцох боломж</li>
            <li>Эрүүл мэндийн чиглэлээр судалгаа явуулах дэмжлэг</li>
            <li>Хувь хүний болон мэргэжлийн хөгжлийн боломжууд</li>
            <li>Эрүүл мэндийн бодлого боловсруулахад оролцох эрх</li>
            <li>Манай сэтгүүл, мэдээллийн материалд нэвтрэх эрх</li>
        </ul>
    </div>

    <div class="requirements-section">
        <h3>Гишүүнчлэлийн шаардлага</h3>
        <ul class="requirements-list">
            <li>Монгол Улсын иргэн эсвэл оршин суугч байх</li>
            <li>Эрүүл мэндийн салбарт ажиллаж байгаа эсвэл сонирхолтой иргэн</li>
            <li>Эмч, эмнэлгийн ажилтан, эсвэл холбогдох мэргэжилтэй</li>
            <li>ТББ-ын дүрэм, журмыг дагаж мөрдөх</li>
            <li>Жилийн гишүүнчлэлийн хураамж төлөх (30,000₮)</li>
            <li>Гишүүнчлэлийн өргөдөл болон шаардлагатай баримт бичиг</li>
        </ul>
    </div>

    <div class="process-section">
        <h3>Гишүүнээр элсэх үе шат</h3>
        <div class="process-steps">
            <div class="step">
                <div class="step-number">1</div>
                <h4>Өргөдөл гаргах</h4>
                <p>Гишүүнчлэлийн өргөдлөө бүрдүүлж ирүүлнэ</p>
            </div>

            <div class="step">
                <div class="step-number">2</div>
                <h4>Баримт шалгах</h4>
                <p>Таны баримтыг хянаж, дутуу материал байвал мэдэгдэнэ</p>
            </div>

            <div class="step">
                <div class="step-number">3</div>
                <h4>Хураамж төлөх</h4>
                <p>Жилийн гишүүнчлэлийн хураамжаа төлнө</p>
            </div>

            <div class="step">
                <div class="step-number">4</div>
                <h4>Гишүүнчлэл баталгаажуулах</h4>
                <p>Гишүүнчлэл баталж, гэрчилгээ олгоно</p>
            </div>
        </div>
    </div>

    <div class="contact-cta">
        <h3>Гишүүнээр элсэхийг хүсч байна уу?</h3>
        <p>
            Та дараах холбоо барих хэсэгт хандаж, дэлгэрэнгүй мэдээлэл авч болно.
            Эсвэл манай оффист шууд очиж өргөдлөө гаргана уу.
        </p>
        <a href="{{ route('contact') }}" class="cta-button">Холбоо барих</a>

        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #e0e0e0;">
            <h4 style="color: #667eea; margin-bottom: 15px;">Өргөдөл илгээх и-мэйл</h4>
            <p style="color: #555;">
                <strong>Имэйл:</strong> <a href="mailto:membership@health2027.mn" style="color: #764ba2; font-weight: bold;">membership@health2027.mn</a><br>
                <strong>Утас:</strong> <a href="tel:+97611123456" style="color: #764ba2; font-weight: bold;">+976 11-123456</a>
            </p>
        </div>
    </div>
</div>
@endsection
