<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Products;
use App\Type_Products;
class PagesController extends Controller
{
   public function getIndex()
   {
   	$slide = Slide::all();
   	$new_product = Products::where('new',1)->paginate(8);
   	$sale_product = Products::where('promotion_price','<>',0)->paginate(8);
   	return view('pages.index',compact('slide','new_product','sale_product'));
   }

   public function getLoaiSP($type)
   {
      $type_product = Products::where('id_type',$type)->get();
      $other_product = Products::where('id_type','<>',$type)->paginate(3);
      $type_sp = Type_Products::where('id',$type)->first();
   	return view('pages.loai_sanpham',compact('type_product','other_product','type_sp'));
   }

   public function getChiTietSanPham(Request $req)
   {
      $product = Products::where('id',$req->id)->first();
      $related = Products::where('id_type',$product->id_type)->paginate(3);
      $sale = Products::where('promotion_price','<>',0)->paginate(4);
      $new = Products::where('new',1)->paginate(4);
   	return view('pages.chitietsanpham',compact('product','related','sale','new'));
   }
   public function getGioithieu()
   {
   	return view('pages.gioithieu');
   }
   public function getLienhe()
   {
   	return view('pages.lienhe');
   }
}
