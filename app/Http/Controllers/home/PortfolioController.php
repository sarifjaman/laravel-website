<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function allportfolio()
    {
        $allportfolio = Portfolio::latest()->get();
        return view('admin.portfolio.all_portfolio', compact('allportfolio'));
    }

    public function addportfolio()
    {
        return view('admin.portfolio.add_portfolio');
    }

    public function storeportfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required|max:255',
            'portfolio_title' => 'required|max:255',
        ]);

        $image = $request->file('portfolio_image');
        $new_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/portfolio/', $new_image);
        $save_url = '/upload/portfolio/' . $new_image;

        Portfolio::insert([
            'portfolio_name' => $request->portfolio_name,
            'portfolio_title' => $request->portfolio_title,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Portfolio inserted successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);
    }

    public function editprortfolio($id)
    {
        $editportfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit_portfolio', compact('editportfolio'));
    }

    public function updateportfolio(Request $request)
    {
        $portfolio_id = $request->id;

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $new_image = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            $image->move('upload/portfolio/', $new_image);
            $save_url = '/upload/portfolio/' . $new_image;

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url
            ]);

            $notification = array(
                'message' => 'Portfolio updated with image successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.portfolio')->with($notification);
        } else {
            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description
            ]);

            $notification = array(
                'message' => "Portfolio updated without image successfully!",
                'alert-type' => 'success'
            );

            return redirect()->route('all.portfolio')->with($notification);
        }
    }

    public function deleteportfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $image = $portfolio->portfolio_image;
        unlink(public_path($image));

        Portfolio::findOrFail($id)->delete();

        $notification = array([
            'message' => 'Portfolio deleteted successfully!',
            'alert-type' => 'success'
        ]);

        return redirect()->route('all.portfolio')->with($notification);
    }

    public function portfoliodetail($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.portfolio_detail', compact('portfolio'));
    }

    public function portfoliohome()
    {
        $portfolio = Portfolio::latest()->get();
        return view('frontend.portfolio_home', compact('portfolio'));
    }
}
