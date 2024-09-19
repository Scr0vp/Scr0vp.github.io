# Udriver

## Introduction

**Udriver** is a web-based application that allows users to book drivers for various travel needs. The platform connects users with available drivers in real-time, ensuring a seamless experience for scheduling pickups and drop-offs. The app integrates with Google Maps API for accurate location tracking and distance calculations, and provides an easy-to-use interface for both users and drivers.

### **Live Site**: [Visit Udriver](https://Scr0vp.github.io)  
*Link to the deployed site once it's available.*

### **Final Project Blog Article**: [Read the Project Blog](#)  
*Insert the link to your blog article that explains the development process of Udriver.*

### **Author**:  
- **LinkedIn**: [[Your LinkedIn Profile](https://www.linkedin.com/in/housam-mosta/)](#)

---

## Installation

### Requirements
- **PHP 7.x or higher**
- **MySQL 5.x or higher**
- **Composer** (for PHP dependencies)
- **Node.js** (for any front-end tools like npm, if applicable)
- **Google Maps API Key**

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/udriver.git
   ```

2. **Navigate to the Project Directory**
   ```bash
   cd udriver
   ```

3. **Install PHP Dependencies**
   ```bash
   composer install
   ```

4. **Create and Configure the `.env` File**  
   Set your environment variables, including database credentials and Google Maps API key.
   ```bash
   cp .env.example .env
   ```

5. **Run Migrations** (Optional if using a database)
   ```bash
   php artisan migrate
   ```

6. **Start the Server**
   ```bash
   php -S localhost:8000
   ```

---

## Usage

- **Booking a Driver**: Navigate to the 'Book Driver' page, enter your pickup and dropoff locations, and choose a vehicle type. The system will find available drivers in your area.
- **Driver View**: Drivers can log in and view booking requests, accept them, and update their location.
- **Admin Dashboard**: Admins can monitor driver status and booking activity in real-time.

### API Routes
- `POST /api/book-driver`: Allows users to book a driver.
- `GET /api/check-availability`: Checks for available drivers in a specified location.
- `POST /api/update-location`: Updates the driver’s current location.

---

## Contributing

We welcome contributions! To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and write clear, concise commit messages.
4. Push your branch to your fork.
5. Submit a pull request to the `main` branch of the original repository.

---

## Related Projects

- **Google Maps API**: [Google Maps API Documentation](https://developers.google.com/maps/documentation)
- **Payment Gateway API**: Integrate third-party payment services for processing payments.

---

## Licensing

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Feel free to modify the content where necessary, especially when the links to the deployed site and blog are ready. Let me know if you'd like further customization!
