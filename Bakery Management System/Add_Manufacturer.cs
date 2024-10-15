using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Bakery_Management_System
{
    public partial class Add_Manufacturer : Form
    {
        public Add_Manufacturer()
        {
            InitializeComponent();
        }

        private void Add_Manufacturer_Load(object sender, EventArgs e)
        {

        }

        private void add_man_Click(object sender, EventArgs e)
        {
            if (man_name.Text != "" && man_licesnse.Text != "" && man_type.Text != "")
            {
                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("INSERT INTO MANUFACTURER(Man_Name,Man_Description,Man_Location,Man_Type,Man_License) " +
                    "VALUES(@a,@b,@c,@d,@e)", con);

                command.Parameters.AddWithValue("@a", man_name.Text.ToString());
                command.Parameters.AddWithValue("@b", man_descrption.Text.ToString());
                command.Parameters.AddWithValue("@c", man_location.Text.ToString());
                command.Parameters.AddWithValue("@d", man_type.Text.ToString());
                command.Parameters.AddWithValue("@e", man_licesnse.Text.ToString());



                command.ExecuteNonQuery();
                con.Close();

                MessageBox.Show("Added Sucessfull", "Added Complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }
    }
}
