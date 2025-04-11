use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Kopi Arabika',
            'description' => 'Kopi dengan rasa fruity dan acidity tinggi',
            'price' => 30000,
        ]);

        Product::create([
            'name' => 'Kopi Robusta',
            'description' => 'Kopi dengan rasa pahit dan caffeine tinggi',
            'price' => 25000,
        ]);
    }
}
