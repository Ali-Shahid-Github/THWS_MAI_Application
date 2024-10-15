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
    public partial class View_Sale : Form
    {
        public View_Sale()
        {
            InitializeComponent();
            
        }

        private string date = DateTime.Now.ToString("yyyy-MM-dd");

        private void dateTimePicker1_CloseUp(object sender, EventArgs e)
        {
            date = dateTimePicker1.Value.ToString("yyyy-MM-dd");

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT SUM(Pur_Amount) FROM PURCHASING WHERE Pur_Date LIKE '%" + date + "%' ", con);
            SqlCommand command2 = new SqlCommand("SELECT SUM(Sol_Amount) FROM SOLD WHERE Sol_Date LIKE '%" + date + "%' ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            SqlDataAdapter adapter2 = new SqlDataAdapter(command2);
            command.ExecuteNonQuery();
            command2.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);

            DataSet dataSet2 = new DataSet();
            adapter2.Fill(dataSet2);

            info.Text = "Purchasing is = " + dataSet.Tables[0].Rows[0].ItemArray[0].ToString() +
                        " and Sale is = " + dataSet2.Tables[0].Rows[0].ItemArray[0].ToString();

            info.Visible = true;
        }

        private void bunifuGradientPanel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void sup_id_combo_box_SelectionChangeCommitted(object sender, EventArgs e)
        {
            if(sup_id_combo_box.SelectedItem.ToString()== "Purchasing")
            {
                grid2.Rows.Clear();
                grid1.Rows.Clear();

                grid1.Visible = true;
                grid2.Visible = false;

                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("SELECT p.Pur_ID, p.Pur_Amount, p.Cat_ID , c.Cat_Name , p.Sup_ID , s.Sup_Name," +
                    " s.Sup_Company, s.Dis_ID, d.Dis_Name, d.Dis_NTN " +
                    "FROM PURCHASING AS p " +
                    "INNER JOIN CATEGORY AS c ON " +
                    "c.Cat_ID = p.Cat_ID " +
                    "INNER JOIN SUPLLIER AS s ON " +
                    "s.Sup_ID = p.Sup_ID " +
                    "INNER JOIN DISTRIBUTER AS d ON " +
                    "d.Dis_ID = s.Dis_ID " +
                    " WHERE p.Pur_Date LIKE '%" + date + "%' ", con);
                SqlDataAdapter adapter = new SqlDataAdapter(command);
                DataSet ds = new DataSet();
                adapter.Fill(ds);

                
                for (int i = 0; i < ds.Tables[0].Rows.Count; i++)
                {

                    DataGridViewRow row = new DataGridViewRow();

                    row.CreateCells(grid1);
                    row.Cells[0].Value = ds.Tables[0].Rows[i].ItemArray[0].ToString();
                    row.Cells[1].Value = ds.Tables[0].Rows[i].ItemArray[1].ToString();
                    row.Cells[2].Value = ds.Tables[0].Rows[i].ItemArray[2].ToString();
                    row.Cells[3].Value = ds.Tables[0].Rows[i].ItemArray[3].ToString();
                    row.Cells[4].Value = ds.Tables[0].Rows[i].ItemArray[4].ToString();
                    row.Cells[5].Value = ds.Tables[0].Rows[i].ItemArray[5].ToString();
                    row.Cells[6].Value = ds.Tables[0].Rows[i].ItemArray[6].ToString();
                    row.Cells[7].Value = ds.Tables[0].Rows[i].ItemArray[7].ToString();
                    row.Cells[8].Value = ds.Tables[0].Rows[i].ItemArray[8].ToString();
                    row.Cells[9].Value = ds.Tables[0].Rows[i].ItemArray[9].ToString();
                    grid1.Rows.Add(row);

                }

            }
            else if (sup_id_combo_box.SelectedItem.ToString() == "Sale")
            {
                grid2.Rows.Clear();
                grid1.Rows.Clear();

                grid2.Visible = true;
                grid1.Visible = false;

                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("SELECT s.Sol_ID, s.Sol_Amount, s.Pro_ID, p.Pro_Name, p.Pro_Stock ,s.Cus_ID," +
                    "  c.Cus_Name FROM SOLD AS s " +
                    "INNER JOIN PRODUCTS AS p ON s.Pro_ID = p.Pro_ID " +
                    "INNER JOIN CUSTOMER AS c ON s.Cus_ID = c.Cus_ID " +
                    " WHERE s.Sol_Date LIKE '%" + date + "%' ", con);
                SqlDataAdapter adapter = new SqlDataAdapter(command);
                DataSet ds = new DataSet();
                adapter.Fill(ds);

                for (int i = 0; i < ds.Tables[0].Rows.Count; i++)
                {

                    DataGridViewRow row = new DataGridViewRow();

                    row.CreateCells(grid2);
                    row.Cells[0].Value = ds.Tables[0].Rows[i].ItemArray[0].ToString();
                    row.Cells[1].Value = ds.Tables[0].Rows[i].ItemArray[1].ToString();
                    row.Cells[2].Value = ds.Tables[0].Rows[i].ItemArray[2].ToString();
                    row.Cells[3].Value = ds.Tables[0].Rows[i].ItemArray[3].ToString();
                    row.Cells[4].Value = ds.Tables[0].Rows[i].ItemArray[4].ToString();
                    row.Cells[5].Value = ds.Tables[0].Rows[i].ItemArray[5].ToString();
                    row.Cells[6].Value = ds.Tables[0].Rows[i].ItemArray[6].ToString();
                    grid2.Rows.Add(row);

                }
            }
        }
    }
}

