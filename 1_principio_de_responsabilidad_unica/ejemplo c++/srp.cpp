#include <iostream>
#include <vector>
#include <fstream>

class Product {
public:
    std::string name;
    double price;
    int quantity;

    Product(std::string name, double price, int quantity)
        : name(name), price(price), quantity(quantity) {}
};

class StoreManager {
private:
    std::vector<Product> inventory;

public:
    void addProduct(const Product& product) {
        inventory.push_back(product);
        std::cout << "Product added: " << product.name << std::endl;
    }

    void removeProduct(const std::string& productName) {
        for (auto it = inventory.begin(); it != inventory.end(); ++it) {
            if (it->name == productName) {
                inventory.erase(it);
                std::cout << "Product removed: " << productName << std::endl;
                return;
            }
        }
        std::cout << "Product not found: " << productName << std::endl;
    }

    void calculateDiscount(double discountRate) {
        for (auto& product : inventory) {
            product.price -= product.price * discountRate;
        }
        std::cout << "Discount applied: " << discountRate * 100 << "%" << std::endl;
    }

    void printInventory() {
        std::cout << "Current Inventory:" << std::endl;
        for (const auto& product : inventory) {
            std::cout << "Product: " << product.name << ", Price: " << product.price 
                      << ", Quantity: " << product.quantity << std::endl;
        }
    }

    void saveInventoryToFile(const std::string& filename) {
        std::ofstream file(filename);
        if (file.is_open()) {
            for (const auto& product : inventory) {
                file << product.name << "," << product.price << "," << product.quantity << "\n";
            }
            file.close();
            std::cout << "Inventory saved to file: " << filename << std::endl;
        }
    }
};

// Uso del código
int main() {
    StoreManager manager;
    manager.addProduct(Product("Laptop", 1000, 5));
    manager.addProduct(Product("Phone", 500, 10));
    manager.printInventory();

    manager.calculateDiscount(0.1);
    manager.printInventory();

    manager.saveInventoryToFile("inventory.txt");
    manager.removeProduct("Laptop");
    manager.printInventory();

    return 0;
}
