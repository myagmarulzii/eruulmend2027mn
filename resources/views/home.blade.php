@extends('layout')

@section('title', 'Санал хүсэлт илгээх - Эрүүл мэндийг дэмжих жил 2027')

@section('extra-css')
<style>
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #667eea;
    }

    .form-group textarea {
        min-height: 150px;
        resize: vertical;
    }

    .submit-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 40px;
        border: none;
        border-radius: 8px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .intro {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        border-left: 5px solid #667eea;
    }

    .intro h2 {
        color: #667eea;
        margin-bottom: 15px;
    }

    .intro p {
        line-height: 1.6;
        color: #555;
    }

    .error {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
@endsection

@section('content')
<div class="intro">
    <h2>Эмч, эмнэлэгийн ажилчдаас санал хүсэлт хүлээн авч байна</h2>
    <p>Монгол улс 2027 оныг "Эрүүл мэндийг дэмжих жил" болгон зарласан. Та эмч, эмнэлэгийн ажилтан бол доорх хэсгүүдийн аль нэгээр санал, хүсэлтээ илгээнэ үү:</p>
    <ul style="margin-left: 20px; margin-top: 10px;">
        <li>Цалин урамшуулал</li>
        <li>Хүний нөөцийн сургалт хөгжил</li>
        <li>Цахим ба Эрүүл мэндийн өгөгдөл</li>
        <li>Эрүүл мэндийн даатгал</li>
        <li>Нийгмийн эрүүл мэнд</li>
    </ul>
</div>

<form action="{{ route('suggestion.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Овог нэр <span style="color: red;">*</span></label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Имэйл хаяг <span style="color: red;">*</span></label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Утасны дугаар <span style="color: red;">*</span></label>
        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
        @error('phone')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="position">Албан тушаал <span style="color: red;">*</span></label>
        <input type="text" id="position" name="position" value="{{ old('position') }}" placeholder="Жишээ: Эмч, Сувилагч, Лаборант гэх мэт" required>
        @error('position')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="category">Санал хүсэлтийн төрөл <span style="color: red;">*</span></label>
        <select id="category" name="category" required>
            <option value="">-- Сонгоно уу --</option>
            <option value="Цалин урамшуулал" {{ old('category') == 'Цалин урамшуулал' ? 'selected' : '' }}>Цалин урамшуулал</option>
            <option value="Хүний нөөцийн сургалт хөгжил" {{ old('category') == 'Хүний нөөцийн сургалт хөгжил' ? 'selected' : '' }}>Хүний нөөцийн сургалт хөгжил</option>
            <option value="Цахим ба Эрүүл мэндийн өгөгдөл" {{ old('category') == 'Цахим ба Эрүүл мэндийн өгөгдөл' ? 'selected' : '' }}>Цахим ба Эрүүл мэндийн өгөгдөл</option>
            <option value="Эрүүл мэндийн даатгал" {{ old('category') == 'Эрүүл мэндийн даатгал' ? 'selected' : '' }}>Эрүүл мэндийн даатгал</option>
            <option value="Нийгмийн эрүүл мэнд" {{ old('category') == 'Нийгмийн эрүүл мэнд' ? 'selected' : '' }}>Нийгмийн эрүүл мэнд</option>
        </select>
        @error('category')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="suggestion">Санал хүсэлт <span style="color: red;">*</span></label>
        <textarea id="suggestion" name="suggestion" placeholder="Та өөрийн санал, хүсэлтээ энд дэлгэрэнгүй бичнэ үү..." required>{{ old('suggestion') }}</textarea>
        @error('suggestion')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <button type="submit" class="submit-btn">Санал илгээх</button>
    </div>
</form>
@endsection
