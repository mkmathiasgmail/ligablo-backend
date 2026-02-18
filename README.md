# Ligablo Backend

## Project Setup

To set up the Ligablo backend project, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/mkmathiasgmail/ligablo-backend.git
   cd ligablo-backend
   ```

2. **Install Dependencies**:
   Depending on the package manager used, run one of the following commands:
   - With npm:
     ```bash
     npm install
     ```
   - With yarn:
     ```bash
     yarn install
     ```

3. **Environment Variables**:
   Create a `.env` file in the root of the project and configure the necessary environment variables as follows:
   ```
   DATABASE_URL=your_database_url
   SECRET_KEY=your_secret_key
   ```

4. **Run Migrations**:
   ```bash
   npm run migrate  # or yarn migrate
   ```

5. **Start the Development Server**:
   ```bash
   npm run dev  # or yarn dev
   ```

## Features

- **User Authentication**: Secure user sign-up and login mechanisms.
- **RESTful API**: Comprehensive API endpoints to manage application resources.
- **Real-time Updates**: Utilizes WebSocket for real-time data communication.
- **Data Validation**: Ensures robust data handling with built-in validation.
- **Scalability**: Designed to easily integrate with microservices.
- **Logging and Monitoring**: Equipped with logging to debug and monitor the application effectively.

### License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.