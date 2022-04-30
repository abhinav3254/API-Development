package Java;

import java.sql.Connection;
import java.sql.DriverManager;

public class Add {

    private static final String serverName = "localhost/poetrydb";
    private static final String userName = "root";
    private static final String password = "";
    // private static final String dbName = "poetrydb";

    public static void main(String[] args) throws Exception{
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection connection;
            connection = DriverManager.getConnection(serverName, userName, password);

            if(connection.isClosed()) {
                System.out.println("Connection closed");
            } else {
                // String POETRY = 
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
