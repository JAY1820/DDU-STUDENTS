using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace LAB8
{
    public partial class login : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        private bool IsValidCredentials(string username, string password)
        {
            // Set your database connection string
            string connectionString = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\iamja\OneDrive\Documents\LAB8.mdf;Integrated Security=True;";

            // Define a SQL query to check if the provided username and password match
            string query = "SELECT COUNT(*) FROM [User] WHERE Username = @Username AND Password = @Password";

            using (SqlConnection connection = new SqlConnection(connectionString))
            using (SqlCommand cmd = new SqlCommand(query, connection))
            {
                // Add parameters to the query
                cmd.Parameters.AddWithValue("@Username", username);
                cmd.Parameters.AddWithValue("@Password", password);

                connection.Open();
                int result = (int)cmd.ExecuteScalar();

                // If a matching user is found, result will be 1 (valid), otherwise 0 (invalid)
                return result == 1;
            }
        }
        protected void btnLogin_Click(object sender, EventArgs e)
        {

            string username = txtUsername.Text;
            string password = txtPassword.Text;

            // Perform authentication logic (e.g., check credentials against a database)
            if (IsValidCredentials(username, password))
            {
                // Authentication successful
                // You can redirect the user to a different page or perform other actions here.
                lblMessage.Visible = true;
                lblMessage.Text = "Login successful!";
                Response.Redirect($"display.aspx?username={HttpUtility.UrlEncode(username)}");
            }
            else
            {
                // Authentication failed
                lblMessage.Visible = true;
                lblMessage.Text = "Invalid username or password.";
            }
        }
    }

}