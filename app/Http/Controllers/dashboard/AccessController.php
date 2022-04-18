<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessController extends Controller
{
   public function loginDelivery()
{
 return view('Dashboard/auth/loginDelivery');
}
 public function loginWarehouse()
{
 return view('Dashboard/auth/loginWarehouse');
}
public function deliveryHome()
    {
        return view('Dashboard.access.deliveryDashboard');
    }
    public function warehouseHome()
    {
        return view('Dashboard.access.warehouseDashboard');
    }
}
