<div>
    <x-form.text 
        label="Nama Lengkap"
        value="{{ @$item->name }}"
        name="name"
    />
</div>

<div>
    <x-form.text 
        label="Telepon"
        value="{{ @$item->phone }}"
        name="phone"
        type="number"
    />
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <x-form.text 
        label="Nama Agent"
        value="{{ @$item->agent_name }}"
        name="agent_name"
    />
    
    <x-form.text 
        label="Kode Agent"
        value="{{ @$item->agent_code }}"
        name="agent_code"
    />
</div>

<div>
    <x-form.text 
        label="Harga Tiket"
        value="{{ @$item->price }}"
        name="price"
        type="number"
    />
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <x-form.text 
        label="Kota Asal"
        value="{{ @$item->start_city }}"
        name="start_city"
    />
    <x-form.text 
        label="Kota Tujuan"
        value="{{ @$item->end_city }}"
        name="end_city"
    />
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <x-form.text 
        label="Lokasi Asal"
        value="{{ @$item->start_location }}"
        name="start_location"
    />
    <x-form.text 
        label="Lokasi Tujuan"
        value="{{ @$item->end_location }}"
        name="end_location"
    />
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <x-form.text 
        label="Tanggal Berangkat"
        value="{{ @$item->start_date }}"
        name="start_date"
        type="date"
    />
    <x-form.text 
        label="Tanggal Sampai"
        value="{{ @$item->end_date }}"
        name="end_date"
        type="date"
    />
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <x-form.text 
        label="Jam Berangkat"
        value="{{ @$item->start_time }}"
        name="start_time"
        type="time"
    />
    <x-form.text 
        label="Jam Sampai"
        value="{{ @$item->end_time }}"
        name="end_time"
        type="time"
    />
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <x-form.text 
        label="Tanggal Order"
        value="{{ @$item->order_date }}"
        name="order_date"
        type="date"
    />
    <x-form.text 
        label="Jam Order"
        value="{{ @$item->order_time }}"
        name="order_time"
        type="time"
    />
</div>

<div>
    <x-form.text 
        label="Nomor Kursi"
        value="{{ @$item->chair_no }}"
        name="chair_no"
    />
</div>