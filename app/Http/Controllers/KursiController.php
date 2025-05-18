
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursi;
use App\Models\JadwalTayang;

class KursiController extends Controller
{
 
    public function index($jadwal_id)
    {
        $jadwal = JadwalTayang::with('studio')->findOrFail($jadwal_id);
        $kursis = Kursi::where('studio_id', $jadwal->studio_id)->get();
        return view('kursi.index', compact('jadwal', 'kursis'));
    }
    public function reservasi(Request $request, $kursi_id)
    {

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jadwal_id' => 'required|exists:jadwal_tayang,jadwal_id',
        ]);
        $kursi = Kursi::findOrFail($kursi_id);
        if ($kursi->status_kursi == 'booked') {
            return back()->with('error', 'Kursi sudah dipesan.');
        }
        $kursi->status_kursi = 'booked';
        $kursi->save();

        return redirect()->route('reservasi.sukses')->with('success', 'Reservasi berhasil!');
    }
}
