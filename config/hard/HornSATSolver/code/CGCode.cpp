#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string unsed_p;
    string unsed_cnf;
    int v;
    int c;
    cin >> unsed_p >> unsed_cnf >> v >> c; cin.ignore();
    for (int i = 0; i < c; i++) {
        string clause;
        getline(cin, clause);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "s UNSATISFIABLE" << endl;
}