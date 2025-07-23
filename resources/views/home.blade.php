@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">หน้าหลัก</div>
            <div class="card-body">
                <h4>ยินดีต้อนรับ, {{ Auth::user()->name }}!</h4>
                <p>คุณได้เข้าสู่ระบบเรียบร้อยแล้ว</p>
                
                <div class="mt-3">
                    <strong>ข้อมูลผู้ใช้:</strong><br>
                    ชื่อ: {{ Auth::user()->name }}<br>
                    อีเมล: {{ Auth::user()->email }}<br>
                    สมัครเมื่อ: {{ Auth::user()->created_at->format('d/m/Y H:i') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection