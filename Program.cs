using System;
using System.Data.SqlClient;
using MySql.Data.MySqlClient;

namespace VEGATABLE
{       
    class Program
    {
        static void Main(string[] args)
        {
            // GetSqlConnection();
            GetMySqlConnection();
        }

        static void GetMySqlConnection()
        {
            string connectionString = @"server=localhost;port=3306;database=northwind2;user=root;password=mysql1234.;";

            // driver, provider

            using(var connection = new MySqlConnection(connectionString))
            {
                try
                {
                    connection.Open();
                    Console.WriteLine("bağlantı sağlandı.");
                }
                catch(Exception e)
                {
                    Console.WriteLine(e.Message);
                }
                finally
                {
                    connection.Close();
                }
            }
        }


        static void GetSqlConnection()
        {
            string connectionString = @"Data Source=.\SQLEXPRESS;Initial Catalog=VEGATABLE;Integrated Security=SSPI;";

            // driver, provider

            using(var connection = new SqlConnection(connectionString))
            {
                try
                {
                    connection.Open();
                    Console.WriteLine("bağlantı sağlandı.");
                }
                catch(Exception e)
                {
                    Console.WriteLine(e.Message);
                }
                finally
                {
                    connection.Close();
                }
            }

        }

      


      
    }
}
