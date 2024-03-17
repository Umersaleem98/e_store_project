<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }


    public function addproducts()
    {
        $category = Category::all();
        return view("admin.addproduct", compact('category'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('products'), $imageName); // Move image to 'public/products' directory

            // Check if the image was successfully moved
            if (!file_exists(public_path('products/' . $imageName))) {
                return redirect()->back()->with('error', 'Failed to move image');
            }
        } else {
            return redirect()->back()->with('error', 'No image file uploaded');
        }

        // Create a new product instance
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->image = $imageName; // Save only the image name in the database
        $product->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added successfully!');
    }


    public function product_list()
    {
        $products = Product::all();
        return view('admin.product_list', compact('products'));
    }



    public function deleteProduct($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Delete the product image from the public storage
        if ($product->image) {
            $imagePath = public_path('products/' . $product->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Delete the product record from the database
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');

    }




    public function edit_product($id)
    {
        $category = Category::all();
        $products = Product::find($id);

        return view("admin.updateproduct", compact('category', 'products'));
    }


    public function updateproducts(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Update product data
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($product->image) {
                $previousImagePath = public_path('products/' . $product->image);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('products'), $imageName); // Move image to 'public/products' directory
            $product->image = $imageName;
        }

        $product->save();

        return view("admin.product_list")->with('success', 'Product updated successfully!');
    }

}
