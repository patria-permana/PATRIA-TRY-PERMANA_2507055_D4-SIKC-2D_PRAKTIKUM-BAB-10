@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Daftar Laporan</h2>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Pelapor</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                </tr>
            </thead>
        <tbody>
            @forelse ($reports as $report)
            <tr>
                <td>{{ $report -> title }}</td>
                <td>{{ $report->category?->name ?? '-' }}</td>
                <td>{{ $report -> user?->name ?? '-' }}</td>
                <td>{{ $report -> location ?? '-' }}</td>
                <td>{{$report -> status }}</td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center">Belum ada laporan</td></tr>
            @endforelse
        </tbody>
        </table>

    </div>
    {{ $reports->links() }}
</div>
@endsection