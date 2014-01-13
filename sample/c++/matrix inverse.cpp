#include<iostream>
#include<conio.h>
using namespace std;

class matrix 
{ private:
  int k[3][3],a,b,c,d,p[3][3],inv[3][3],adj[3][3],det;
      public :
 void determinant ();
 void minor_matrix ();
 void input_matrix();
 void adjoint_matrix();
 void inverse_matrix();
 };
void matrix :: minor_matrix()
{ 
     for(int i=0;i<=2;i++)
     { for(int j=0;j<=2;j++)
     { int a=i+1,b=i+2,c=j+1,d=j+2;
      if (a>2)
      a=a-3;
       if (b>2)
      b=b-3;
       if (c>2)
      c=c-3;
       if (d>2)
      d=d-3;
      p[i][j]=k[a][c]*k[b][d]-k[b][c]*k[a][d];
     }
     }
}


void matrix :: input_matrix()
{
     cout<<" please enter the matrix elements(3*3) ";
     for(int i=0;i<=2;i++)
     { for(int j=0;j<=2;j++)
       cin>>k[i][j];
       }
}
void matrix :: adjoint_matrix()
{ cout<<"adjoint ";
     for(int i=0;i<=2;i++)
     { for(int j=0;j<=2;j++)
       {adj[i][j]=p[j][i];
      cout<<adj[i][j]<<"    "; }
      cout<< endl;
      }
}
void matrix :: determinant()
{ det=0;
     for(int j=0;j<=2;j++)
     det=det+k[0][j]*p[0][j];
     //if(det<0)
    // det=-det;
}
void matrix :: inverse_matrix()
{ cout<<" the inversed matrix is : ";
     for(int i=0;i<=2;i++)
     { for(int j=0;j<=2;j++)
        { inv[i][j]= adj[i][j]/det ;
        cout<<inv[i][j]<<"\t";
        }
        cout<<endl;
        }
}
int main()
{ matrix m;
m.input_matrix();
m.minor_matrix();     
m.adjoint_matrix();

m.determinant();
m.inverse_matrix();

}
