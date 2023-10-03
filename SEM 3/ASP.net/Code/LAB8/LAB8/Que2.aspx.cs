using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
namespace LAB8
{
    public partial class Que2 : System.Web.UI.Page
    {
        SqlConnection con;
        //SqlCommand cmd;
        protected void Page_Load(object sender, EventArgs e)
        {
            con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\iamja\OneDrive\Documents\LAB8.mdf;Integrated Security=True;");
        }

        protected void btnRegister_Click(object sender, EventArgs e)
        {
            // Retrieve values from the form controls
            string name = txtName.Text;
            string surname = txtSurname.Text;
            string username = txtUsername.Text;
            string password = txtPassword.Text;
            string email = txtEmail.Text;
            string gender = ddlGender.SelectedValue;
            string city = txtCity.Text;

            // Define your SQL con string
            
            // Create an SQL con and SQL command
            using (con)
            {
                con.Open();

                // Define the SQL insert query
                string insertQuery = "INSERT INTO [User] (Name, Surname, Username, Password, Email, Gender, City) " +
                                     "VALUES (@Name, @Surname, @Username, @Password, @Email, @Gender, @City)";

                using (SqlCommand cmd = new SqlCommand(insertQuery, con))
                {
                    // Add parameters to the query to prevent SQL injection
                    cmd.Parameters.AddWithValue("@Name", name);
                    cmd.Parameters.AddWithValue("@Surname", surname);
                    cmd.Parameters.AddWithValue("@Username", username);
                    cmd.Parameters.AddWithValue("@Password", password);
                    cmd.Parameters.AddWithValue("@Email", email);
                    cmd.Parameters.AddWithValue("@Gender", gender);
                    cmd.Parameters.AddWithValue("@City", city);

                    // Execute the SQL command to insert the data
                    if(cmd.ExecuteNonQuery()>0)
                    {
                        Response.Write("<script>alert('Record inserted...')</script>");
                    }
                }
            }
           
        }

    }
}