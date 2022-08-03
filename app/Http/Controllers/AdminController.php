<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KritikSaran;
use App\Models\Pariwisata;
use App\Models\UMKM;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $total_umkm = UMKM::query()->count();
        $total_pariwisata = Pariwisata::query()->count();
        $kritik_saran = KritikSaran::latest("created_at")->get();
        $berita_terkini = Berita::latest("created_at")
            ->limit(5)
            ->get();
        return view("pages.admin.dashboard", [
            "route" => "dashboard",
            "total_umkm" => $total_umkm,
            "total_pariwisata" => $total_pariwisata,
            "kritik_saran" => $kritik_saran,
            "berita_terkini" => $berita_terkini,
        ]);
    }

    public function login(Request $request)
    {
        $remember = $request->has("remember") ? true : false;
        $validatedData = $request->validate([
            "name" => "required",
            "password" => "required| min:8",
        ]);
        // dd($validatedData, $remember);
        if (Auth::attempt($validatedData, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended("/dashboard");
        }
        ALert::error("Login gagal!", "Username atau password salah!");
        return redirect("/login");
    }
    public function store()
    {
        $validatedData = request()->validate([
            "name" => "required | unique:users,name",
            "email" => "required | unique:users,email",
            "password" => "required | min:8",
        ]);
        //hash password
        $validatedData["password"] = Hash::make($validatedData["password"]);
        User::create($validatedData);
        Alert::success("success", "Akun berhasil dibuat!");
        return redirect("/login");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login");
    }
}