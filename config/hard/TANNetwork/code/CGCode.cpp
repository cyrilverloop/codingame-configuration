#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string start_point;
    cin >> start_point; cin.ignore();
    string end_point;
    cin >> end_point; cin.ignore();
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string stop_name;
        getline(cin, stop_name);
    }
    int m;
    cin >> m; cin.ignore();
    for (int i = 0; i < m; i++) {
        string route;
        getline(cin, route);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "IMPOSSIBLE" << endl;
}