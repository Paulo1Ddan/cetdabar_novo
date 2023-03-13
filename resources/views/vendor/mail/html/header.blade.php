@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Cetdabar')
<img src="https://cdn.icon-icons.com/icons2/37/PNG/512/bookstack_libr_3024.png" class="logo" alt="Cetdabar">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
