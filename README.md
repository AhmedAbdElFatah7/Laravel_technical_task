## About the Project
This project is a **REST API for managing products** using Laravel 11.  
It supports **CRUD operations** (Create, Read, Update, Delete) for products, with **optional price filtering**, and includes **Unit Tests to verify product creation**.

---

## Features
- **Products Table**:
  - `id` (Auto Increment)
  - `name` (string, required)
  - `price` (decimal, required, >0)
  - `stock` (integer, required, ≥0)

- **API Endpoints**:
  - `GET /api/products` → Retrieve all products with optional `min_price` and `max_price` filtering.
  - `POST /api/products` → Add a new product (with validation).
  - `PUT /api/products/{id}` → Update an existing product.
  - `DELETE /api/products/{id}` → Delete a product.

- **Validation**:
  - Used **FormRequests** (`StoreProductRequest` and `UpdateProductRequest`) for clean and organized data validation.
  
- **Unit Test**:
  - Test to verify that product creation via the API works correctly.

