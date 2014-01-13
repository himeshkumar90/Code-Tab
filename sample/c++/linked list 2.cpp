#include<iostream>
using namespace std;
struct node 
{ int data ;
 node * link;
};
int main()
{char ch='y';
  int a ;
  cout<<" Enter the data for the first list";
  cin>>a;
  node * start =new node;
  node * end ;
  node * point ;
  start ->data=a; 
  start ->link= NULL;
  end = start;
  point= start;
while(ch=='y'||ch=='Y')
{   node * new_ptr = new node ;
         cout<<" Do you want to add data (y/n)"<<endl;
         cin>>ch;
   if (ch=='y'||ch=='Y')
   { int b;
  cout<<" Enter the data element you want to add "<<endl;
    cin>> b;
     new_ptr->data=b;
    new_ptr->link=NULL;
    end->link=new_ptr;
    end=new_ptr;
  }
  else
      break;
}
node *conduct ;
conduct=point;
 while(conduct!=NULL)
  { cout<<conduct-> data<<endl;
    conduct= conduct->link;
}

return 0;
}
 
